<?php

namespace NFePHP\NFSe\Models\Publica\Factories\v300;

/**
 * Classe para extração dos dados retornados pelos webservices
 * conforme o modelo ABRASF Publica
 *
 * @category  NFePHP
 * @package   NFePHP\NFSe\Models\Publica\Response
 * @copyright NFePHP Copyright (c) 2016
 * @license   http://www.gnu.org/licenses/lgpl.txt LGPLv3+
 * @license   https://opensource.org/licenses/MIT MIT
 * @license   http://www.gnu.org/licenses/gpl.txt GPLv3+
 * @author    Roberto L. Machado <linux.rlm at gmail dot com>
 * @link      http://github.com/nfephp-org/sped-nfse for the canonical source repository
 */

use NFePHP\NFSe\Models\Publica\Response as ResponseBase;

class Response extends ResponseBase
{
    public function read($response)
    {
        $out = [];
        preg_match_all("/(<\?xml.*)(<\/return>)/s", $response, $out);
        $response = $out[1][0];
        return parent::read($response);
    }
}

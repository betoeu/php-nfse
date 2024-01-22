<?php

namespace NFePHP\NFSe\Counties\M1302603;

/**
 * Classe para a comunicação com os webservices da
 * Cidade de Manaus AM
 * conforme o modelo Abaco
 *
 * @category  NFePHP
 * @package   NFePHP\NFSe\Counties\M1302603\Tools
 * @copyright NFePHP Copyright (c) 2016
 * @license   http://www.gnu.org/licenses/lgpl.txt LGPLv3+
 * @license   https://opensource.org/licenses/MIT MIT
 * @license   http://www.gnu.org/licenses/gpl.txt GPLv3+
 * @author    Maykon da S. de Siqueira <maykon at multilig dot com dot br>
 * @link      http://github.com/nfephp-org/sped-nfse for the canonical source repository
 */

use NFePHP\NFSe\Models\Abaco\Tools as ToolsAbaco;

class Tools extends ToolsAbaco
{
    /**
     * Webservices URL
     * @var array
     */
    protected $url = [
        1 => [
            'RecepcionarLoteRps' => 'https://www.e-nfs.com.br/varzeagrande/servlet/arecepcionarloterps?wsdl',
            'ConsultarLoteRps' => 'https://www.e-nfs.com.br/varzeagrande/servlet/aconsultarloterps?wsdl',
            'ConsultarSituacaoLoteRps' => 'https://www.e-nfs.com.br/varzeagrande/servlet/aconsultarsituacaoloterps?wsdl',
            'ConsultarNfsePorRps' => 'https://www.e-nfs.com.br/varzeagrande/servlet/aconsultarnfseporrps?wsdl',
            'ConsultarNfse' => 'https://www.e-nfs.com.br/varzeagrande/servlet/aconsultarnfse?wsdl',
            'CancelarNfse'  => ' https://www.e-nfs.com.br/varzeagrande/servlet/acancelarnfse?wsdl'
        ],
        2 => [
            'RecepcionarLoteRps' => 'https://enfs-hom.abaco.com.br/varzeagrande/servlet/arecepcionarloterps?wsdl',
            'ConsultarLoteRps' => 'https://enfs-hom.abaco.com.br/varzeagrande/servlet/aconsultarloterps?wsdl',
            'ConsultarSituacaoLoteRps' => 'https://enfs-hom.abaco.com.br/varzeagrande/servlet/aconsultarsituacaoloterps?wsdl',
            'ConsultarNfsePorRps' => 'https://enfs-hom.abaco.com.br/varzeagrande/servlet/aconsultarnfseporrps?wsdl',
            'ConsultarNfse' => 'https://enfs-hom.abaco.com.br/varzeagrande/servlet/aconsultarnfse?wsdl',
            'CancelarNfse'  => ' https://enfs-hom.abaco.com.br/varzeagrande/servlet/acancelarnfse?wsdl'
        ]
    ];
    /**
     * County Namespace
     * @var string
     */
    protected $xmlns = '';
    /**
     * Soap Version
     * @var int
     */
    protected $soapversion = SOAP_1_1;
    /**
     * SIAFI County Cod
     * @var int
     */
    protected $codcidade = 0255;
    /**
     * Indicates when use CDATA string on message
     * @var boolean
     */
    protected $withcdata = true;
    /**
     * Encription signature algorithm
     * @var string
     */
    protected $algorithm = OPENSSL_ALGO_SHA1;
    /**
     * Version of schemas
     * @var int
     */
    protected $versao = 2010;
    /**
     * namespaces for soap envelope
     * @var array
     */
    protected $namespaces = [
        1 => [
            'xmlns:soapenv' => "http://schemas.xmlsoap.org/soap/envelope/",
            'xmlns:e' => "http://www.e-nfs.com.br"
        ],
        2 => [
            'xmlns:soapenv' => "http://schemas.xmlsoap.org/soap/envelope/",
            'xmlns:e' => "http://www.e-nfs.com.br"
        ]
    ];
}

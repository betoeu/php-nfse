<?php

namespace NFePHP\NFSe\Models\Publica\Factories;

abstract class CartaCorrecaoNfseEnvio extends Factory
{

    protected $xmlns;
    protected $schemeFolder;
    protected $cmun;

    /**
     * @param $xmlns
     */
    public function setXmlns($xmlns)
    {
        $this->xmlns = $xmlns;
    }

    /**
     * @param $schemeFolder
     */
    public function setSchemeFolder($schemeFolder)
    {
        $this->schemeFolder = $schemeFolder;
    }

    /**
     * @param $cmun
     */
    public function setCodMun($cmun)
    {
        $this->cmun = $cmun;
    }

    /**
     * Método usado para gerar o XML do Soap Request
     * @param $versao
     * @param $remetenteCNPJCPF,
     * @param $inscricaoMunicipal,
     * @param $rps
     * @param $nfseNumero
     * @param $retificaValor
     * @return bool|string
     */
    abstract public function render(
        $versao,
        $remetenteCNPJCPF,
        $inscricaoMunicipal,
        $nfseNumero,
        $rps,
        $retificaValor = false
    );
}
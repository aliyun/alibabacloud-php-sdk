<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomDomainInput extends Model
{
    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var CertConfig
     */
    public $certConfig;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var bool
     */
    public $keepFullPath;

    /**
     * @var string
     */
    public $namespaceID;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var TLSConfig
     */
    public $tlsConfig;

    /**
     * @var WAFConfig
     */
    public $wafConfig;
    protected $_name = [
        'applicationName' => 'applicationName',
        'certConfig'      => 'certConfig',
        'domainName'      => 'domainName',
        'keepFullPath'    => 'keepFullPath',
        'namespaceID'     => 'namespaceID',
        'protocol'        => 'protocol',
        'tlsConfig'       => 'tlsConfig',
        'wafConfig'       => 'wafConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['applicationName'] = $this->applicationName;
        }
        if (null !== $this->certConfig) {
            $res['certConfig'] = null !== $this->certConfig ? $this->certConfig->toMap() : null;
        }
        if (null !== $this->domainName) {
            $res['domainName'] = $this->domainName;
        }
        if (null !== $this->keepFullPath) {
            $res['keepFullPath'] = $this->keepFullPath;
        }
        if (null !== $this->namespaceID) {
            $res['namespaceID'] = $this->namespaceID;
        }
        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }
        if (null !== $this->tlsConfig) {
            $res['tlsConfig'] = null !== $this->tlsConfig ? $this->tlsConfig->toMap() : null;
        }
        if (null !== $this->wafConfig) {
            $res['wafConfig'] = null !== $this->wafConfig ? $this->wafConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomDomainInput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['applicationName'])) {
            $model->applicationName = $map['applicationName'];
        }
        if (isset($map['certConfig'])) {
            $model->certConfig = CertConfig::fromMap($map['certConfig']);
        }
        if (isset($map['domainName'])) {
            $model->domainName = $map['domainName'];
        }
        if (isset($map['keepFullPath'])) {
            $model->keepFullPath = $map['keepFullPath'];
        }
        if (isset($map['namespaceID'])) {
            $model->namespaceID = $map['namespaceID'];
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['tlsConfig'])) {
            $model->tlsConfig = TLSConfig::fromMap($map['tlsConfig']);
        }
        if (isset($map['wafConfig'])) {
            $model->wafConfig = WAFConfig::fromMap($map['wafConfig']);
        }

        return $model;
    }
}

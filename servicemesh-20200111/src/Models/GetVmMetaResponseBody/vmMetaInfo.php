<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetVmMetaResponseBody;

use AlibabaCloud\Tea\Model;

class vmMetaInfo extends Model
{
    /**
     * @var string
     */
    public $tokenPath;

    /**
     * @var string
     */
    public $hostsContent;

    /**
     * @var string
     */
    public $envoyEnvPath;

    /**
     * @var string
     */
    public $tokenContent;

    /**
     * @var string
     */
    public $certChainPath;

    /**
     * @var string
     */
    public $rootCertContent;

    /**
     * @var string
     */
    public $keyContent;

    /**
     * @var string
     */
    public $rootCertPath;

    /**
     * @var string
     */
    public $certChainContent;

    /**
     * @var string
     */
    public $hostsPath;

    /**
     * @var string
     */
    public $keyPath;

    /**
     * @var string
     */
    public $envoyEnvContent;
    protected $_name = [
        'tokenPath'        => 'TokenPath',
        'hostsContent'     => 'HostsContent',
        'envoyEnvPath'     => 'EnvoyEnvPath',
        'tokenContent'     => 'TokenContent',
        'certChainPath'    => 'CertChainPath',
        'rootCertContent'  => 'RootCertContent',
        'keyContent'       => 'KeyContent',
        'rootCertPath'     => 'RootCertPath',
        'certChainContent' => 'CertChainContent',
        'hostsPath'        => 'HostsPath',
        'keyPath'          => 'KeyPath',
        'envoyEnvContent'  => 'EnvoyEnvContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tokenPath) {
            $res['TokenPath'] = $this->tokenPath;
        }
        if (null !== $this->hostsContent) {
            $res['HostsContent'] = $this->hostsContent;
        }
        if (null !== $this->envoyEnvPath) {
            $res['EnvoyEnvPath'] = $this->envoyEnvPath;
        }
        if (null !== $this->tokenContent) {
            $res['TokenContent'] = $this->tokenContent;
        }
        if (null !== $this->certChainPath) {
            $res['CertChainPath'] = $this->certChainPath;
        }
        if (null !== $this->rootCertContent) {
            $res['RootCertContent'] = $this->rootCertContent;
        }
        if (null !== $this->keyContent) {
            $res['KeyContent'] = $this->keyContent;
        }
        if (null !== $this->rootCertPath) {
            $res['RootCertPath'] = $this->rootCertPath;
        }
        if (null !== $this->certChainContent) {
            $res['CertChainContent'] = $this->certChainContent;
        }
        if (null !== $this->hostsPath) {
            $res['HostsPath'] = $this->hostsPath;
        }
        if (null !== $this->keyPath) {
            $res['KeyPath'] = $this->keyPath;
        }
        if (null !== $this->envoyEnvContent) {
            $res['EnvoyEnvContent'] = $this->envoyEnvContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vmMetaInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TokenPath'])) {
            $model->tokenPath = $map['TokenPath'];
        }
        if (isset($map['HostsContent'])) {
            $model->hostsContent = $map['HostsContent'];
        }
        if (isset($map['EnvoyEnvPath'])) {
            $model->envoyEnvPath = $map['EnvoyEnvPath'];
        }
        if (isset($map['TokenContent'])) {
            $model->tokenContent = $map['TokenContent'];
        }
        if (isset($map['CertChainPath'])) {
            $model->certChainPath = $map['CertChainPath'];
        }
        if (isset($map['RootCertContent'])) {
            $model->rootCertContent = $map['RootCertContent'];
        }
        if (isset($map['KeyContent'])) {
            $model->keyContent = $map['KeyContent'];
        }
        if (isset($map['RootCertPath'])) {
            $model->rootCertPath = $map['RootCertPath'];
        }
        if (isset($map['CertChainContent'])) {
            $model->certChainContent = $map['CertChainContent'];
        }
        if (isset($map['HostsPath'])) {
            $model->hostsPath = $map['HostsPath'];
        }
        if (isset($map['KeyPath'])) {
            $model->keyPath = $map['KeyPath'];
        }
        if (isset($map['EnvoyEnvContent'])) {
            $model->envoyEnvContent = $map['EnvoyEnvContent'];
        }

        return $model;
    }
}

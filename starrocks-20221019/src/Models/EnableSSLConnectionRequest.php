<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;

class EnableSSLConnectionRequest extends Model
{
    /**
     * @var string
     */
    public $customSSLCertificate;

    /**
     * @var bool
     */
    public $enableCustom;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $renewal;

    /**
     * @var string
     */
    public $sslKeyPassword;

    /**
     * @var string
     */
    public $sslKeystorePassword;
    protected $_name = [
        'customSSLCertificate' => 'CustomSSLCertificate',
        'enableCustom' => 'EnableCustom',
        'instanceId' => 'InstanceId',
        'renewal' => 'Renewal',
        'sslKeyPassword' => 'SslKeyPassword',
        'sslKeystorePassword' => 'SslKeystorePassword',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customSSLCertificate) {
            $res['CustomSSLCertificate'] = $this->customSSLCertificate;
        }

        if (null !== $this->enableCustom) {
            $res['EnableCustom'] = $this->enableCustom;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->renewal) {
            $res['Renewal'] = $this->renewal;
        }

        if (null !== $this->sslKeyPassword) {
            $res['SslKeyPassword'] = $this->sslKeyPassword;
        }

        if (null !== $this->sslKeystorePassword) {
            $res['SslKeystorePassword'] = $this->sslKeystorePassword;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomSSLCertificate'])) {
            $model->customSSLCertificate = $map['CustomSSLCertificate'];
        }

        if (isset($map['EnableCustom'])) {
            $model->enableCustom = $map['EnableCustom'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Renewal'])) {
            $model->renewal = $map['Renewal'];
        }

        if (isset($map['SslKeyPassword'])) {
            $model->sslKeyPassword = $map['SslKeyPassword'];
        }

        if (isset($map['SslKeystorePassword'])) {
            $model->sslKeystorePassword = $map['SslKeystorePassword'];
        }

        return $model;
    }
}

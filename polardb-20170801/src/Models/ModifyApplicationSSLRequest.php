<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ModifyApplicationSSLRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $caPem;

    /**
     * @var string
     */
    public $certPem;

    /**
     * @var string
     */
    public $keyPem;

    /**
     * @var bool
     */
    public $sslEnabled;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'caPem' => 'CaPem',
        'certPem' => 'CertPem',
        'keyPem' => 'KeyPem',
        'sslEnabled' => 'SslEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->caPem) {
            $res['CaPem'] = $this->caPem;
        }

        if (null !== $this->certPem) {
            $res['CertPem'] = $this->certPem;
        }

        if (null !== $this->keyPem) {
            $res['KeyPem'] = $this->keyPem;
        }

        if (null !== $this->sslEnabled) {
            $res['SslEnabled'] = $this->sslEnabled;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['CaPem'])) {
            $model->caPem = $map['CaPem'];
        }

        if (isset($map['CertPem'])) {
            $model->certPem = $map['CertPem'];
        }

        if (isset($map['KeyPem'])) {
            $model->keyPem = $map['KeyPem'];
        }

        if (isset($map['SslEnabled'])) {
            $model->sslEnabled = $map['SslEnabled'];
        }

        return $model;
    }
}

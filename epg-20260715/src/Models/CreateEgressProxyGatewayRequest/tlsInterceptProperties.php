<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models\CreateEgressProxyGatewayRequest;

use AlibabaCloud\Dara\Model;

class tlsInterceptProperties extends Model
{
    /**
     * @var string
     */
    public $privateCaCertificateId;

    /**
     * @var string
     */
    public $tlsInterceptMode;
    protected $_name = [
        'privateCaCertificateId' => 'PrivateCaCertificateId',
        'tlsInterceptMode' => 'TlsInterceptMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->privateCaCertificateId) {
            $res['PrivateCaCertificateId'] = $this->privateCaCertificateId;
        }

        if (null !== $this->tlsInterceptMode) {
            $res['TlsInterceptMode'] = $this->tlsInterceptMode;
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
        if (isset($map['PrivateCaCertificateId'])) {
            $model->privateCaCertificateId = $map['PrivateCaCertificateId'];
        }

        if (isset($map['TlsInterceptMode'])) {
            $model->tlsInterceptMode = $map['TlsInterceptMode'];
        }

        return $model;
    }
}

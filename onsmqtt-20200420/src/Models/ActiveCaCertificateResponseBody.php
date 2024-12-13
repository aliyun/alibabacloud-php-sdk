<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class ActiveCaCertificateResponseBody extends Model
{
    /**
     * @description Public parameters, each request ID is unique and can be used for troubleshooting and problem localization.
     *
     * @example 020F6A43-19E6-4B6E-B846-44EB31DF****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The SN serial number of the activated CA certificate, used to uniquely identify a CA certificate.
     *
     * @example 007269004887******
     *
     * @var string
     */
    public $sn;
    protected $_name = [
        'requestId' => 'RequestId',
        'sn'        => 'Sn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sn) {
            $res['Sn'] = $this->sn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ActiveCaCertificateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Sn'])) {
            $model->sn = $map['Sn'];
        }

        return $model;
    }
}

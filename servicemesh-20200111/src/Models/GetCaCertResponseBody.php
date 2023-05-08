<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class GetCaCertResponseBody extends Model
{
    /**
     * @description The Base64-encoded content of the CA certificate.
     *
     * @example -----BEGIN CERTIFICATE-----\nMIIFszCCA5ugAwIBAgIDM/1OMA0GCSqGSIb3DQEBCwUAME427zhT4HDLcCEW****-----END CERTIFICATE-----\n
     *
     * @var string
     */
    public $caCert;

    /**
     * @description The ID of the request.
     *
     * @example E0496204-7586-5B4C-B364-2361CC0ED****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'caCert'    => 'CaCert',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caCert) {
            $res['CaCert'] = $this->caCert;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCaCertResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaCert'])) {
            $model->caCert = $map['CaCert'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

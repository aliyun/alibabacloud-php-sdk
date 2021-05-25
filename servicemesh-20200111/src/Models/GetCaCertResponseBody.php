<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class GetCaCertResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @description base64 encode format
     *
     * @var string
     */
    public $caCert;
    protected $_name = [
        'requestId' => 'RequestId',
        'caCert'    => 'CaCert',
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
        if (null !== $this->caCert) {
            $res['CaCert'] = $this->caCert;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CaCert'])) {
            $model->caCert = $map['CaCert'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Addresspurification\V20191118\Models;

use AlibabaCloud\Tea\Model;

class GetZipcodeResponseBody extends Model
{
    /**
     * @example {"zipcode":"311500","time_used":{"rt":{"zipcode":"0.004756927490234375","complete":"0.020321130752563477","structure":"0.007731199264526367"},"start":"1589800854.316437"},"status":"OK"}
     *
     * @var string
     */
    public $data;

    /**
     * @description RequestId
     *
     * @example D0078DC6-8A1F-41A0-9A5F-A6B6443E9A65
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data'      => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetZipcodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

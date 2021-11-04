<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DescribeIceProductStatusResponseBody extends Model
{
    /**
     * @var bool
     */
    public $ICEServiceAvaliable;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ICEServiceAvaliable' => 'ICEServiceAvaliable',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ICEServiceAvaliable) {
            $res['ICEServiceAvaliable'] = $this->ICEServiceAvaliable;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIceProductStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ICEServiceAvaliable'])) {
            $model->ICEServiceAvaliable = $map['ICEServiceAvaliable'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

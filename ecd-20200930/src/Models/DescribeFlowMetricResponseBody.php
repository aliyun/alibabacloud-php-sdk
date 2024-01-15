<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeFlowMetricResponseBody extends Model
{
    /**
     * @example {\"instanceId\": \"np-4wrye3ishxi47****\", \"requestId\": \"4F0CD5B6-70D6-5115-A2F7-7EAC3981****\", \"dataPoints\": [{\"timeStamp\": 1636510320000, \"Average\": 293752.0}]}
     *
     * @var string
     */
    public $data;

    /**
     * @example 6857EDCB-631F-5405-BE95-45CBB4C3****
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
     * @return DescribeFlowMetricResponseBody
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

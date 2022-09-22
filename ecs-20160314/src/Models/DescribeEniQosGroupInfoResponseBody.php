<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeEniQosGroupInfoResponseBody\qosGroupInfo;
use AlibabaCloud\Tea\Model;

class DescribeEniQosGroupInfoResponseBody extends Model
{
    /**
     * @var qosGroupInfo
     */
    public $qosGroupInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'qosGroupInfo' => 'QosGroupInfo',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qosGroupInfo) {
            $res['QosGroupInfo'] = null !== $this->qosGroupInfo ? $this->qosGroupInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEniQosGroupInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QosGroupInfo'])) {
            $model->qosGroupInfo = qosGroupInfo::fromMap($map['QosGroupInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

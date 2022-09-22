<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\Tea\Model;

class QueryEniQosGroupByEniResponseBody extends Model
{
    /**
     * @var string
     */
    public $qosGroupName;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'qosGroupName' => 'QosGroupName',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qosGroupName) {
            $res['QosGroupName'] = $this->qosGroupName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryEniQosGroupByEniResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QosGroupName'])) {
            $model->qosGroupName = $map['QosGroupName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

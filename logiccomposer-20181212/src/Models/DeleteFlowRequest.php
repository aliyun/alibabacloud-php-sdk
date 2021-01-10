<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DeleteFlowRequest extends Model
{
    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $flowIds;
    protected $_name = [
        'flowId'  => 'FlowId',
        'flowIds' => 'FlowIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->flowIds) {
            $res['FlowIds'] = $this->flowIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['FlowIds'])) {
            $model->flowIds = $map['FlowIds'];
        }

        return $model;
    }
}

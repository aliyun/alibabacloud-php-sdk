<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class DeleteContactFlowRequest extends Model
{
    /**
     * @example 0f87c997-b0c1-41d4-9e9e-1b791de6ad1f
     *
     * @var string
     */
    public $contactFlowId;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'contactFlowId' => 'ContactFlowId',
        'instanceId'    => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactFlowId) {
            $res['ContactFlowId'] = $this->contactFlowId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteContactFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactFlowId'])) {
            $model->contactFlowId = $map['ContactFlowId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class PublishContactFlowRequest extends Model
{
    /**
     * @example b0a063bf-f138-42a4-ad9f-9babe3ec1a9e
     *
     * @var string
     */
    public $contactFlowId;

    /**
     * @example 0e0b8e78-af3e-4360-a5c5-f9bb5c2b8af2
     *
     * @var string
     */
    public $draftId;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'contactFlowId' => 'ContactFlowId',
        'draftId'       => 'DraftId',
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
        if (null !== $this->draftId) {
            $res['DraftId'] = $this->draftId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublishContactFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactFlowId'])) {
            $model->contactFlowId = $map['ContactFlowId'];
        }
        if (isset($map['DraftId'])) {
            $model->draftId = $map['DraftId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}

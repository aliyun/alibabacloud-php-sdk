<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class CommitContactFlowRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 7d706489-d06d-4a92-8666-8c9dba2c5cb1
     *
     * @var string
     */
    public $contactFlowId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $definition;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example b28f74ca-5846-4496-8bbd-34fb1750798c
     *
     * @var string
     */
    public $draftId;

    /**
     * @description This parameter is required.
     *
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'contactFlowId' => 'ContactFlowId',
        'definition'    => 'Definition',
        'description'   => 'Description',
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
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
     * @return CommitContactFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactFlowId'])) {
            $model->contactFlowId = $map['ContactFlowId'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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

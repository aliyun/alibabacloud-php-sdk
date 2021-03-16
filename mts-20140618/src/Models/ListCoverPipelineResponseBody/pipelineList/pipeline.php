<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\ListCoverPipelineResponseBody\pipelineList;

use AlibabaCloud\Tea\Model;

class pipeline extends Model
{
    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $quotaNum;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $notifyConfig;

    /**
     * @var string
     */
    public $extendConfig;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var int
     */
    public $quotaUsed;
    protected $_name = [
        'state'        => 'State',
        'quotaNum'     => 'quotaNum',
        'userId'       => 'UserId',
        'notifyConfig' => 'NotifyConfig',
        'extendConfig' => 'ExtendConfig',
        'priority'     => 'Priority',
        'role'         => 'Role',
        'name'         => 'Name',
        'pipelineId'   => 'PipelineId',
        'quotaUsed'    => 'quotaUsed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->quotaNum) {
            $res['quotaNum'] = $this->quotaNum;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->notifyConfig) {
            $res['NotifyConfig'] = $this->notifyConfig;
        }
        if (null !== $this->extendConfig) {
            $res['ExtendConfig'] = $this->extendConfig;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->quotaUsed) {
            $res['quotaUsed'] = $this->quotaUsed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pipeline
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['quotaNum'])) {
            $model->quotaNum = $map['quotaNum'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['NotifyConfig'])) {
            $model->notifyConfig = $map['NotifyConfig'];
        }
        if (isset($map['ExtendConfig'])) {
            $model->extendConfig = $map['ExtendConfig'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['quotaUsed'])) {
            $model->quotaUsed = $map['quotaUsed'];
        }

        return $model;
    }
}

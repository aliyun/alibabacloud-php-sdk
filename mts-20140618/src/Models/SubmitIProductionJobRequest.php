<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class SubmitIProductionJobRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $jobParams;

    /**
     * @var string
     */
    public $scheduleParams;

    /**
     * @var string
     */
    public $notifyUrl;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $input;

    /**
     * @var string
     */
    public $output;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'functionName'         => 'FunctionName',
        'modelId'              => 'ModelId',
        'jobParams'            => 'JobParams',
        'scheduleParams'       => 'ScheduleParams',
        'notifyUrl'            => 'NotifyUrl',
        'userData'             => 'UserData',
        'pipelineId'           => 'PipelineId',
        'ownerAccount'         => 'OwnerAccount',
        'input'                => 'Input',
        'output'               => 'Output',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->jobParams) {
            $res['JobParams'] = $this->jobParams;
        }
        if (null !== $this->scheduleParams) {
            $res['ScheduleParams'] = $this->scheduleParams;
        }
        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitIProductionJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['JobParams'])) {
            $model->jobParams = $map['JobParams'];
        }
        if (isset($map['ScheduleParams'])) {
            $model->scheduleParams = $map['ScheduleParams'];
        }
        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        return $model;
    }
}

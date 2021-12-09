<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class SubmitEditingJobsRequest extends Model
{
    /**
     * @var string
     */
    public $editingInputs;

    /**
     * @var string
     */
    public $editingJobOssFileRoleArn;

    /**
     * @var int
     */
    public $editingJobOssFileUid;

    /**
     * @var string
     */
    public $editingJobOutputs;

    /**
     * @var string
     */
    public $editingJobURL;

    /**
     * @var string
     */
    public $outputBucket;

    /**
     * @var string
     */
    public $outputLocation;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'editingInputs'            => 'EditingInputs',
        'editingJobOssFileRoleArn' => 'EditingJobOssFileRoleArn',
        'editingJobOssFileUid'     => 'EditingJobOssFileUid',
        'editingJobOutputs'        => 'EditingJobOutputs',
        'editingJobURL'            => 'EditingJobURL',
        'outputBucket'             => 'OutputBucket',
        'outputLocation'           => 'OutputLocation',
        'ownerAccount'             => 'OwnerAccount',
        'ownerId'                  => 'OwnerId',
        'pipelineId'               => 'PipelineId',
        'resourceOwnerAccount'     => 'ResourceOwnerAccount',
        'resourceOwnerId'          => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->editingInputs) {
            $res['EditingInputs'] = $this->editingInputs;
        }
        if (null !== $this->editingJobOssFileRoleArn) {
            $res['EditingJobOssFileRoleArn'] = $this->editingJobOssFileRoleArn;
        }
        if (null !== $this->editingJobOssFileUid) {
            $res['EditingJobOssFileUid'] = $this->editingJobOssFileUid;
        }
        if (null !== $this->editingJobOutputs) {
            $res['EditingJobOutputs'] = $this->editingJobOutputs;
        }
        if (null !== $this->editingJobURL) {
            $res['EditingJobURL'] = $this->editingJobURL;
        }
        if (null !== $this->outputBucket) {
            $res['OutputBucket'] = $this->outputBucket;
        }
        if (null !== $this->outputLocation) {
            $res['OutputLocation'] = $this->outputLocation;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitEditingJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EditingInputs'])) {
            $model->editingInputs = $map['EditingInputs'];
        }
        if (isset($map['EditingJobOssFileRoleArn'])) {
            $model->editingJobOssFileRoleArn = $map['EditingJobOssFileRoleArn'];
        }
        if (isset($map['EditingJobOssFileUid'])) {
            $model->editingJobOssFileUid = $map['EditingJobOssFileUid'];
        }
        if (isset($map['EditingJobOutputs'])) {
            $model->editingJobOutputs = $map['EditingJobOutputs'];
        }
        if (isset($map['EditingJobURL'])) {
            $model->editingJobURL = $map['EditingJobURL'];
        }
        if (isset($map['OutputBucket'])) {
            $model->outputBucket = $map['OutputBucket'];
        }
        if (isset($map['OutputLocation'])) {
            $model->outputLocation = $map['OutputLocation'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}

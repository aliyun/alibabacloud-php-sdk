<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class SubmitComplexJobRequest extends Model
{
    /**
     * @var string
     */
    public $complexConfigs;

    /**
     * @var string
     */
    public $inputs;

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

    /**
     * @var string
     */
    public $transcodeOutput;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'complexConfigs'       => 'ComplexConfigs',
        'inputs'               => 'Inputs',
        'outputBucket'         => 'OutputBucket',
        'outputLocation'       => 'OutputLocation',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pipelineId'           => 'PipelineId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'transcodeOutput'      => 'TranscodeOutput',
        'userData'             => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complexConfigs) {
            $res['ComplexConfigs'] = $this->complexConfigs;
        }
        if (null !== $this->inputs) {
            $res['Inputs'] = $this->inputs;
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
        if (null !== $this->transcodeOutput) {
            $res['TranscodeOutput'] = $this->transcodeOutput;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitComplexJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComplexConfigs'])) {
            $model->complexConfigs = $map['ComplexConfigs'];
        }
        if (isset($map['Inputs'])) {
            $model->inputs = $map['Inputs'];
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
        if (isset($map['TranscodeOutput'])) {
            $model->transcodeOutput = $map['TranscodeOutput'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;

class ImportFpShotJobRequest extends Model
{
    /**
     * @var string
     */
    public $fpDBId;

    /**
     * @var string
     */
    public $fpImportConfig;

    /**
     * @var string
     */
    public $input;

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
    public $userData;
    protected $_name = [
        'fpDBId' => 'FpDBId',
        'fpImportConfig' => 'FpImportConfig',
        'input' => 'Input',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'pipelineId' => 'PipelineId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fpDBId) {
            $res['FpDBId'] = $this->fpDBId;
        }

        if (null !== $this->fpImportConfig) {
            $res['FpImportConfig'] = $this->fpImportConfig;
        }

        if (null !== $this->input) {
            $res['Input'] = $this->input;
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

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FpDBId'])) {
            $model->fpDBId = $map['FpDBId'];
        }

        if (isset($map['FpImportConfig'])) {
            $model->fpImportConfig = $map['FpImportConfig'];
        }

        if (isset($map['Input'])) {
            $model->input = $map['Input'];
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

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}

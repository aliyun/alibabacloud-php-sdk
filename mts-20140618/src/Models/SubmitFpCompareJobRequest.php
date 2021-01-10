<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class SubmitFpCompareJobRequest extends Model
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
    public $masterMedia;

    /**
     * @var string
     */
    public $queryMedia;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $fpDBId;

    /**
     * @var string
     */
    public $matchedFrameStorage;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $ownerAccount;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'masterMedia'          => 'MasterMedia',
        'queryMedia'           => 'QueryMedia',
        'pipelineId'           => 'PipelineId',
        'fpDBId'               => 'FpDBId',
        'matchedFrameStorage'  => 'MatchedFrameStorage',
        'userData'             => 'UserData',
        'ownerAccount'         => 'OwnerAccount',
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
        if (null !== $this->masterMedia) {
            $res['MasterMedia'] = $this->masterMedia;
        }
        if (null !== $this->queryMedia) {
            $res['QueryMedia'] = $this->queryMedia;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->fpDBId) {
            $res['FpDBId'] = $this->fpDBId;
        }
        if (null !== $this->matchedFrameStorage) {
            $res['MatchedFrameStorage'] = $this->matchedFrameStorage;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitFpCompareJobRequest
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
        if (isset($map['MasterMedia'])) {
            $model->masterMedia = $map['MasterMedia'];
        }
        if (isset($map['QueryMedia'])) {
            $model->queryMedia = $map['QueryMedia'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['FpDBId'])) {
            $model->fpDBId = $map['FpDBId'];
        }
        if (isset($map['MatchedFrameStorage'])) {
            $model->matchedFrameStorage = $map['MatchedFrameStorage'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitAIImageJobRequest extends Model
{
    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $videoId;

    /**
     * @var string
     */
    public $AITemplateId;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $AIPipelineId;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'ownerAccount'         => 'OwnerAccount',
        'videoId'              => 'VideoId',
        'AITemplateId'         => 'AITemplateId',
        'userData'             => 'UserData',
        'AIPipelineId'         => 'AIPipelineId',
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
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->AITemplateId) {
            $res['AITemplateId'] = $this->AITemplateId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->AIPipelineId) {
            $res['AIPipelineId'] = $this->AIPipelineId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitAIImageJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['AITemplateId'])) {
            $model->AITemplateId = $map['AITemplateId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['AIPipelineId'])) {
            $model->AIPipelineId = $map['AIPipelineId'];
        }

        return $model;
    }
}

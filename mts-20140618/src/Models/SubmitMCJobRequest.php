<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class SubmitMCJobRequest extends Model
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
    public $video;

    /**
     * @var string
     */
    public $images;

    /**
     * @var string
     */
    public $texts;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $censorConfig;

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
        'video'                => 'Video',
        'images'               => 'Images',
        'texts'                => 'Texts',
        'pipelineId'           => 'PipelineId',
        'censorConfig'         => 'CensorConfig',
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
        if (null !== $this->video) {
            $res['Video'] = $this->video;
        }
        if (null !== $this->images) {
            $res['Images'] = $this->images;
        }
        if (null !== $this->texts) {
            $res['Texts'] = $this->texts;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->censorConfig) {
            $res['CensorConfig'] = $this->censorConfig;
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
     * @return SubmitMCJobRequest
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
        if (isset($map['Video'])) {
            $model->video = $map['Video'];
        }
        if (isset($map['Images'])) {
            $model->images = $map['Images'];
        }
        if (isset($map['Texts'])) {
            $model->texts = $map['Texts'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['CensorConfig'])) {
            $model->censorConfig = $map['CensorConfig'];
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

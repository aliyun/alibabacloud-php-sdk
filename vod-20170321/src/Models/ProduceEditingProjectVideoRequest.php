<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class ProduceEditingProjectVideoRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $coverURL;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $mediaMetadata;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $produceConfig;

    /**
     * @var string
     */
    public $projectId;

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
    public $timeline;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'appId' => 'AppId',
        'coverURL' => 'CoverURL',
        'description' => 'Description',
        'mediaMetadata' => 'MediaMetadata',
        'ownerId' => 'OwnerId',
        'produceConfig' => 'ProduceConfig',
        'projectId' => 'ProjectId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'timeline' => 'Timeline',
        'title' => 'Title',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->mediaMetadata) {
            $res['MediaMetadata'] = $this->mediaMetadata;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->produceConfig) {
            $res['ProduceConfig'] = $this->produceConfig;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->timeline) {
            $res['Timeline'] = $this->timeline;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['MediaMetadata'])) {
            $model->mediaMetadata = $map['MediaMetadata'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ProduceConfig'])) {
            $model->produceConfig = $map['ProduceConfig'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['Timeline'])) {
            $model->timeline = $map['Timeline'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}

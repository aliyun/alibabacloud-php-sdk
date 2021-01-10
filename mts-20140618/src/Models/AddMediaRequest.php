<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class AddMediaRequest extends Model
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
    public $fileURL;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $coverURL;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $mediaWorkflowId;

    /**
     * @var string
     */
    public $mediaWorkflowUserData;

    /**
     * @var bool
     */
    public $inputUnbind;

    /**
     * @var int
     */
    public $cateId;

    /**
     * @var string
     */
    public $overrideParams;

    /**
     * @var string
     */
    public $ownerAccount;
    protected $_name = [
        'ownerId'               => 'OwnerId',
        'resourceOwnerAccount'  => 'ResourceOwnerAccount',
        'resourceOwnerId'       => 'ResourceOwnerId',
        'fileURL'               => 'FileURL',
        'title'                 => 'Title',
        'description'           => 'Description',
        'coverURL'              => 'CoverURL',
        'tags'                  => 'Tags',
        'mediaWorkflowId'       => 'MediaWorkflowId',
        'mediaWorkflowUserData' => 'MediaWorkflowUserData',
        'inputUnbind'           => 'InputUnbind',
        'cateId'                => 'CateId',
        'overrideParams'        => 'OverrideParams',
        'ownerAccount'          => 'OwnerAccount',
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
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->mediaWorkflowId) {
            $res['MediaWorkflowId'] = $this->mediaWorkflowId;
        }
        if (null !== $this->mediaWorkflowUserData) {
            $res['MediaWorkflowUserData'] = $this->mediaWorkflowUserData;
        }
        if (null !== $this->inputUnbind) {
            $res['InputUnbind'] = $this->inputUnbind;
        }
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->overrideParams) {
            $res['OverrideParams'] = $this->overrideParams;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddMediaRequest
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
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['MediaWorkflowId'])) {
            $model->mediaWorkflowId = $map['MediaWorkflowId'];
        }
        if (isset($map['MediaWorkflowUserData'])) {
            $model->mediaWorkflowUserData = $map['MediaWorkflowUserData'];
        }
        if (isset($map['InputUnbind'])) {
            $model->inputUnbind = $map['InputUnbind'];
        }
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['OverrideParams'])) {
            $model->overrideParams = $map['OverrideParams'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        return $model;
    }
}

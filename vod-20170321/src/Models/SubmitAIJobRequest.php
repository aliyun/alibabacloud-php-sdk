<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitAIJobRequest extends Model
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
    public $mediaId;

    /**
     * @var string
     */
    public $types;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $input;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'ownerAccount'         => 'OwnerAccount',
        'mediaId'              => 'MediaId',
        'types'                => 'Types',
        'config'               => 'Config',
        'userData'             => 'UserData',
        'input'                => 'Input',
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
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->types) {
            $res['Types'] = $this->types;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitAIJobRequest
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
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['Types'])) {
            $model->types = $map['Types'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }

        return $model;
    }
}

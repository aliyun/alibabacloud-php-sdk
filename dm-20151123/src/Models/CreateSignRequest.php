<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class CreateSignRequest extends Model
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
    public $signName;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $signType;

    /**
     * @var string
     */
    public $fileNames;

    /**
     * @var int
     */
    public $fromType;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'signName'             => 'SignName',
        'remark'               => 'Remark',
        'signType'             => 'SignType',
        'fileNames'            => 'FileNames',
        'fromType'             => 'FromType',
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
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->signType) {
            $res['SignType'] = $this->signType;
        }
        if (null !== $this->fileNames) {
            $res['FileNames'] = $this->fileNames;
        }
        if (null !== $this->fromType) {
            $res['FromType'] = $this->fromType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSignRequest
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
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SignType'])) {
            $model->signType = $map['SignType'];
        }
        if (isset($map['FileNames'])) {
            $model->fileNames = $map['FileNames'];
        }
        if (isset($map['FromType'])) {
            $model->fromType = $map['FromType'];
        }

        return $model;
    }
}

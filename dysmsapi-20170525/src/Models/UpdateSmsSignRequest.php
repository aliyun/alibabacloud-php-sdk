<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class UpdateSmsSignRequest extends Model
{
    /**
     * @example http://www.aliyun.com/
     *
     * @var string
     */
    public $applySceneContent;

    /**
     * @var string[]
     */
    public $moreData;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description This parameter is required.
     *
     * @example 2004393xxxx
     *
     * @var int
     */
    public $qualificationId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $signName;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $signSource;

    /**
     * @example 1
     *
     * @var int
     */
    public $signType;

    /**
     * @example false
     *
     * @var bool
     */
    public $thirdParty;
    protected $_name = [
        'applySceneContent'    => 'ApplySceneContent',
        'moreData'             => 'MoreData',
        'ownerId'              => 'OwnerId',
        'qualificationId'      => 'QualificationId',
        'remark'               => 'Remark',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'signName'             => 'SignName',
        'signSource'           => 'SignSource',
        'signType'             => 'SignType',
        'thirdParty'           => 'ThirdParty',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applySceneContent) {
            $res['ApplySceneContent'] = $this->applySceneContent;
        }
        if (null !== $this->moreData) {
            $res['MoreData'] = $this->moreData;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->qualificationId) {
            $res['QualificationId'] = $this->qualificationId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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
        if (null !== $this->signSource) {
            $res['SignSource'] = $this->signSource;
        }
        if (null !== $this->signType) {
            $res['SignType'] = $this->signType;
        }
        if (null !== $this->thirdParty) {
            $res['ThirdParty'] = $this->thirdParty;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSmsSignRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplySceneContent'])) {
            $model->applySceneContent = $map['ApplySceneContent'];
        }
        if (isset($map['MoreData'])) {
            if (!empty($map['MoreData'])) {
                $model->moreData = $map['MoreData'];
            }
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['QualificationId'])) {
            $model->qualificationId = $map['QualificationId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
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
        if (isset($map['SignSource'])) {
            $model->signSource = $map['SignSource'];
        }
        if (isset($map['SignType'])) {
            $model->signType = $map['SignType'];
        }
        if (isset($map['ThirdParty'])) {
            $model->thirdParty = $map['ThirdParty'];
        }

        return $model;
    }
}

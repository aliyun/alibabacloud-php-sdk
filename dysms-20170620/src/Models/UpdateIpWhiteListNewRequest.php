<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;

class UpdateIpWhiteListNewRequest extends Model
{
    /**
     * @var int
     */
    public $featureCode;

    /**
     * @var string
     */
    public $ipWhiteList;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $prodCode;

    /**
     * @var int
     */
    public $realNameInsId;

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
    public $userName;
    protected $_name = [
        'featureCode' => 'FeatureCode',
        'ipWhiteList' => 'IpWhiteList',
        'ownerId' => 'OwnerId',
        'prodCode' => 'ProdCode',
        'realNameInsId' => 'RealNameInsId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->featureCode) {
            $res['FeatureCode'] = $this->featureCode;
        }

        if (null !== $this->ipWhiteList) {
            $res['IpWhiteList'] = $this->ipWhiteList;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }

        if (null !== $this->realNameInsId) {
            $res['RealNameInsId'] = $this->realNameInsId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['FeatureCode'])) {
            $model->featureCode = $map['FeatureCode'];
        }

        if (isset($map['IpWhiteList'])) {
            $model->ipWhiteList = $map['IpWhiteList'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }

        if (isset($map['RealNameInsId'])) {
            $model->realNameInsId = $map['RealNameInsId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class CreateVerifySchemeRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $bundleId;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $packName;

    /**
     * @var string
     */
    public $packSign;

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
    public $schemeName;
    protected $_name = [
        'appName'              => 'AppName',
        'bundleId'             => 'BundleId',
        'osType'               => 'OsType',
        'ownerId'              => 'OwnerId',
        'packName'             => 'PackName',
        'packSign'             => 'PackSign',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'schemeName'           => 'SchemeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->packName) {
            $res['PackName'] = $this->packName;
        }
        if (null !== $this->packSign) {
            $res['PackSign'] = $this->packSign;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->schemeName) {
            $res['SchemeName'] = $this->schemeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVerifySchemeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PackName'])) {
            $model->packName = $map['PackName'];
        }
        if (isset($map['PackSign'])) {
            $model->packSign = $map['PackSign'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SchemeName'])) {
            $model->schemeName = $map['SchemeName'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListUserDefineRegionResponseBody\userDefineRegionList;

use AlibabaCloud\Tea\Model;

class userDefineRegionEntity extends Model
{
    /**
     * @description The ID of the region to which the namespace belongs.
     *
     * @example cn-shenzhen
     *
     * @var string
     */
    public $belongRegion;

    /**
     * @description Indicates whether remote debugging is allowed.
     *
     * @example false
     *
     * @var bool
     */
    public $debugEnable;

    /**
     * @description The description of the namespace.
     *
     * @example betaappManager
     *
     * @var string
     */
    public $description;

    /**
     * @description The unique identifier of the namespace.
     *
     * @example 1330
     *
     * @var int
     */
    public $id;

    /**
     * @description The type of the registry. Valid values:
     *
     *   default: shared service registry of Enterprise Distributed Application Service (EDAS)
     *   exclusive_mse: Microservices Engine (MSE) Nacos registry
     *
     * @example default: EDAS
     *
     * @var string
     */
    public $mseInstanceId;

    /**
     * @description The ID of the namespace.
     *
     * > The ID cannot be changed after the namespace is created. The ID is in the `Physical region ID:Logical region identifier` format .
     * @example cn-shenzhen:betaappManager
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the namespace.
     *
     * @example betaappManager
     *
     * @var string
     */
    public $regionName;

    /**
     * @description The ID of the MSE instance.
     *
     * @example mse_prepaid_public_cn-tl32n******
     *
     * @var string
     */
    public $registryType;

    /**
     * @description The ID of the Alibaba Cloud account to which the namespace belongs.
     *
     * @example edas_****_test@aliyun-****.com
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'belongRegion'  => 'BelongRegion',
        'debugEnable'   => 'DebugEnable',
        'description'   => 'Description',
        'id'            => 'Id',
        'mseInstanceId' => 'MseInstanceId',
        'regionId'      => 'RegionId',
        'regionName'    => 'RegionName',
        'registryType'  => 'RegistryType',
        'userId'        => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->belongRegion) {
            $res['BelongRegion'] = $this->belongRegion;
        }
        if (null !== $this->debugEnable) {
            $res['DebugEnable'] = $this->debugEnable;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->mseInstanceId) {
            $res['MseInstanceId'] = $this->mseInstanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->registryType) {
            $res['RegistryType'] = $this->registryType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userDefineRegionEntity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BelongRegion'])) {
            $model->belongRegion = $map['BelongRegion'];
        }
        if (isset($map['DebugEnable'])) {
            $model->debugEnable = $map['DebugEnable'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MseInstanceId'])) {
            $model->mseInstanceId = $map['MseInstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['RegistryType'])) {
            $model->registryType = $map['RegistryType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListUserDefineRegionResponseBody\userDefineRegionList;

use AlibabaCloud\Dara\Model;

class userDefineRegionEntity extends Model
{
    /**
     * @var string
     */
    public $belongRegion;

    /**
     * @var bool
     */
    public $debugEnable;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $mseInstanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $registryType;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'belongRegion' => 'BelongRegion',
        'debugEnable' => 'DebugEnable',
        'description' => 'Description',
        'id' => 'Id',
        'mseInstanceId' => 'MseInstanceId',
        'regionId' => 'RegionId',
        'regionName' => 'RegionName',
        'registryType' => 'RegistryType',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

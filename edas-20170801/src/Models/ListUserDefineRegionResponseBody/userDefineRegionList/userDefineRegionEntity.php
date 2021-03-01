<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListUserDefineRegionResponseBody\userDefineRegionList;

use AlibabaCloud\Tea\Model;

class userDefineRegionEntity extends Model
{
    /**
     * @var string
     */
    public $belongRegion;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $debugEnable;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'belongRegion' => 'BelongRegion',
        'regionName'   => 'RegionName',
        'description'  => 'Description',
        'debugEnable'  => 'DebugEnable',
        'userId'       => 'UserId',
        'id'           => 'Id',
        'regionId'     => 'RegionId',
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
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->debugEnable) {
            $res['DebugEnable'] = $this->debugEnable;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DebugEnable'])) {
            $model->debugEnable = $map['DebugEnable'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

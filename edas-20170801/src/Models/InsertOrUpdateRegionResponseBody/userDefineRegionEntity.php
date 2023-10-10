<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\InsertOrUpdateRegionResponseBody;

use AlibabaCloud\Tea\Model;

class userDefineRegionEntity extends Model
{
    /**
     * @description The ID of the region to which the namespace belongs.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $belongRegion;

    /**
     * @description Indicates whether remote debugging is enabled. Valid values:
     *
     *   true: Remote debugging is enabled.
     *   false: Remote debugging is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $debugEnable;

    /**
     * @description The description of the namespace.
     *
     * @example Logical region
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the namespace is created or modified. If this parameter is left empty or 0 is returned, the namespace is created. Otherwise, the namespace is modified.
     *
     * @example 15160
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID of the namespace.
     *
     *   The ID of a custom namespace is in the `region ID:namespace identifier` format. Example: cn-beijing:tdy218.
     *   The ID of the default namespace is in the `region ID` format. Example: cn-beijing.
     *
     * @example cn-beijing:test
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the namespace.
     *
     * @example test_region
     *
     * @var string
     */
    public $regionName;

    /**
     * @description The ID of the Alibaba Cloud account to which the custom namespace belongs.
     *
     * @example edas_****_test@aliyun-****.com
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'belongRegion' => 'BelongRegion',
        'debugEnable'  => 'DebugEnable',
        'description'  => 'Description',
        'id'           => 'Id',
        'regionId'     => 'RegionId',
        'regionName'   => 'RegionName',
        'userId'       => 'UserId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}

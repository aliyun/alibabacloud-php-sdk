<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class UpdateDbfsRequest extends Model
{
    /**
     * @example {"cpuCoreCount":0.5,"memorySize":512,"pageCacheSize":128}
     *
     * @var string
     */
    public $advancedFeatures;

    /**
     * @example dbfs-GOrr********Yd0VLOyBpg
     *
     * @var string
     */
    public $fsId;

    /**
     * @example dbfs.medium
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example MySQL 5.7
     *
     * @var string
     */
    public $usedScene;
    protected $_name = [
        'advancedFeatures' => 'AdvancedFeatures',
        'fsId'             => 'FsId',
        'instanceType'     => 'InstanceType',
        'regionId'         => 'RegionId',
        'usedScene'        => 'UsedScene',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedFeatures) {
            $res['AdvancedFeatures'] = $this->advancedFeatures;
        }
        if (null !== $this->fsId) {
            $res['FsId'] = $this->fsId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->usedScene) {
            $res['UsedScene'] = $this->usedScene;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDbfsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvancedFeatures'])) {
            $model->advancedFeatures = $map['AdvancedFeatures'];
        }
        if (isset($map['FsId'])) {
            $model->fsId = $map['FsId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UsedScene'])) {
            $model->usedScene = $map['UsedScene'];
        }

        return $model;
    }
}

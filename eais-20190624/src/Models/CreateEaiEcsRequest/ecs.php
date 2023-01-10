<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaiEcsRequest;

use AlibabaCloud\Tea\Model;

class ecs extends Model
{
    /**
     * @example aliyun_2_1903_x64_20G_alibase_20200324.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @example 10
     *
     * @var string
     */
    public $internetMaxBandwidthIn;

    /**
     * @example 10
     *
     * @var string
     */
    public $internetMaxBandwidthOut;

    /**
     * @example test1
     *
     * @var string
     */
    public $name;

    /**
     * @example EcsV587!
     *
     * @var string
     */
    public $password;

    /**
     * @example cloud_ssd
     *
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @example 40
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @example ecs.g7.4xlarge
     *
     * @var string
     */
    public $type;

    /**
     * @example cn-shenzhen-e
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'imageId'                 => 'ImageId',
        'internetMaxBandwidthIn'  => 'InternetMaxBandwidthIn',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'name'                    => 'Name',
        'password'                => 'Password',
        'systemDiskCategory'      => 'SystemDiskCategory',
        'systemDiskSize'          => 'SystemDiskSize',
        'type'                    => 'Type',
        'zoneId'                  => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->internetMaxBandwidthIn) {
            $res['InternetMaxBandwidthIn'] = $this->internetMaxBandwidthIn;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InternetMaxBandwidthIn'])) {
            $model->internetMaxBandwidthIn = $map['InternetMaxBandwidthIn'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}

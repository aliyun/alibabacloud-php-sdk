<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePeripheralDriversResponseBody;

use AlibabaCloud\Dara\Model;

class driverInfos extends Model
{
    /**
     * @var string
     */
    public $brand;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $ownerType;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'brand' => 'Brand',
        'createTime' => 'CreateTime',
        'deviceType' => 'DeviceType',
        'icon' => 'Icon',
        'id' => 'Id',
        'name' => 'Name',
        'osType' => 'OsType',
        'ownerType' => 'OwnerType',
        'source' => 'Source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->brand) {
            $res['Brand'] = $this->brand;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }

        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->ownerType) {
            $res['OwnerType'] = $this->ownerType;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
        if (isset($map['Brand'])) {
            $model->brand = $map['Brand'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }

        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['OwnerType'])) {
            $model->ownerType = $map['OwnerType'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}

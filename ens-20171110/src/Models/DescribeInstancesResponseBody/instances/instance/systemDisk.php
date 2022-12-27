<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Tea\Model;

class systemDisk extends Model
{
    /**
     * @example file
     *
     * @var string
     */
    public $category;

    /**
     * @example d-5ip4c2dhmas0rn7rt0p9****
     *
     * @var string
     */
    public $diskId;

    /**
     * @example DiskName
     *
     * @var string
     */
    public $diskName;

    /**
     * @example 51200
     *
     * @var int
     */
    public $size;

    /**
     * @example pangu
     *
     * @var string
     */
    public $deviceType;

    /**
     * @example system
     *
     * @var string
     */
    public $diskType;

    /**
     * @example DiskName
     *
     * @var string
     */
    public $name;

    /**
     * @example 20480
     *
     * @var int
     */
    public $storage;

    /**
     * @description UUID。
     *
     * @example d-5ip4c2dhmas0rn7rt0p96****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'category'   => 'Category',
        'diskId'     => 'DiskId',
        'diskName'   => 'DiskName',
        'size'       => 'Size',
        'deviceType' => 'device_type',
        'diskType'   => 'disk_type',
        'name'       => 'name',
        'storage'    => 'storage',
        'uuid'       => 'uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->deviceType) {
            $res['device_type'] = $this->deviceType;
        }
        if (null !== $this->diskType) {
            $res['disk_type'] = $this->diskType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->storage) {
            $res['storage'] = $this->storage;
        }
        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemDisk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['device_type'])) {
            $model->deviceType = $map['device_type'];
        }
        if (isset($map['disk_type'])) {
            $model->diskType = $map['disk_type'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['storage'])) {
            $model->storage = $map['storage'];
        }
        if (isset($map['uuid'])) {
            $model->uuid = $map['uuid'];
        }

        return $model;
    }
}

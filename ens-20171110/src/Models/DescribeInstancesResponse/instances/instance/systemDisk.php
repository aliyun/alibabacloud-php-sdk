<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstancesResponse\instances\instance;

use AlibabaCloud\Tea\Model;

class systemDisk extends Model
{
    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var int
     */
    public $storage;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $diskId;

    /**
     * @var string
     */
    public $diskName;
    protected $_name = [
        'deviceType' => 'device_type',
        'storage'    => 'storage',
        'uuid'       => 'uuid',
        'diskType'   => 'disk_type',
        'name'       => 'name',
        'category'   => 'Category',
        'size'       => 'Size',
        'diskId'     => 'DiskId',
        'diskName'   => 'DiskName',
    ];

    public function validate()
    {
        Model::validateRequired('deviceType', $this->deviceType, true);
        Model::validateRequired('storage', $this->storage, true);
        Model::validateRequired('uuid', $this->uuid, true);
        Model::validateRequired('diskType', $this->diskType, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('category', $this->category, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('diskId', $this->diskId, true);
        Model::validateRequired('diskName', $this->diskName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceType) {
            $res['device_type'] = $this->deviceType;
        }
        if (null !== $this->storage) {
            $res['storage'] = $this->storage;
        }
        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }
        if (null !== $this->diskType) {
            $res['disk_type'] = $this->diskType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
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
        if (isset($map['device_type'])) {
            $model->deviceType = $map['device_type'];
        }
        if (isset($map['storage'])) {
            $model->storage = $map['storage'];
        }
        if (isset($map['uuid'])) {
            $model->uuid = $map['uuid'];
        }
        if (isset($map['disk_type'])) {
            $model->diskType = $map['disk_type'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }

        return $model;
    }
}

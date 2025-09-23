<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterAttributeResponseBody\DBNodes;

use AlibabaCloud\Dara\Model;

class volumes extends Model
{
    /**
     * @var string
     */
    public $mountPath;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sizeGB;

    /**
     * @var string
     */
    public $storageCategory;

    /**
     * @var string
     */
    public $storageType;
    protected $_name = [
        'mountPath' => 'MountPath',
        'name' => 'Name',
        'sizeGB' => 'SizeGB',
        'storageCategory' => 'StorageCategory',
        'storageType' => 'StorageType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->sizeGB) {
            $res['SizeGB'] = $this->sizeGB;
        }

        if (null !== $this->storageCategory) {
            $res['StorageCategory'] = $this->storageCategory;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
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
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SizeGB'])) {
            $model->sizeGB = $map['SizeGB'];
        }

        if (isset($map['StorageCategory'])) {
            $model->storageCategory = $map['StorageCategory'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}

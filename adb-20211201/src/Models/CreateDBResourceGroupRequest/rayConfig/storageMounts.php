<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\CreateDBResourceGroupRequest\rayConfig;

use AlibabaCloud\Dara\Model;

class storageMounts extends Model
{
    /**
     * @var string
     */
    public $mountPath;

    /**
     * @var int
     */
    public $storageId;

    /**
     * @var string
     */
    public $storageName;
    protected $_name = [
        'mountPath' => 'MountPath',
        'storageId' => 'StorageId',
        'storageName' => 'StorageName',
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

        if (null !== $this->storageId) {
            $res['StorageId'] = $this->storageId;
        }

        if (null !== $this->storageName) {
            $res['StorageName'] = $this->storageName;
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

        if (isset($map['StorageId'])) {
            $model->storageId = $map['StorageId'];
        }

        if (isset($map['StorageName'])) {
            $model->storageName = $map['StorageName'];
        }

        return $model;
    }
}

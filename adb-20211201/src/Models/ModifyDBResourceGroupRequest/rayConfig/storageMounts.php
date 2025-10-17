<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ModifyDBResourceGroupRequest\rayConfig;

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
    protected $_name = [
        'mountPath' => 'MountPath',
        'storageId' => 'StorageId',
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

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class DiskInit extends Model
{
    /**
     * @var string
     */
    public $diskName;

    /**
     * @var bool
     */
    public $localDisk;

    /**
     * @var string
     */
    public $mkfsType;

    /**
     * @var bool
     */
    public $mountForRuntime;

    /**
     * @var string
     */
    public $mountTarget;
    protected $_name = [
        'diskName' => 'disk_name',
        'localDisk' => 'local_disk',
        'mkfsType' => 'mkfs_type',
        'mountForRuntime' => 'mount_for_runtime',
        'mountTarget' => 'mount_target',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diskName) {
            $res['disk_name'] = $this->diskName;
        }

        if (null !== $this->localDisk) {
            $res['local_disk'] = $this->localDisk;
        }

        if (null !== $this->mkfsType) {
            $res['mkfs_type'] = $this->mkfsType;
        }

        if (null !== $this->mountForRuntime) {
            $res['mount_for_runtime'] = $this->mountForRuntime;
        }

        if (null !== $this->mountTarget) {
            $res['mount_target'] = $this->mountTarget;
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
        if (isset($map['disk_name'])) {
            $model->diskName = $map['disk_name'];
        }

        if (isset($map['local_disk'])) {
            $model->localDisk = $map['local_disk'];
        }

        if (isset($map['mkfs_type'])) {
            $model->mkfsType = $map['mkfs_type'];
        }

        if (isset($map['mount_for_runtime'])) {
            $model->mountForRuntime = $map['mount_for_runtime'];
        }

        if (isset($map['mount_target'])) {
            $model->mountTarget = $map['mount_target'];
        }

        return $model;
    }
}

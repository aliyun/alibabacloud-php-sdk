<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest\cloudDisks\status;
use AlibabaCloud\Tea\Model;

class cloudDisks extends Model
{
    /**
     * @description If **Resource Type** is **Public Resource** or if **Resource Quota** is subscription-based general-purpose computing resources (CPU cores ≥ 2 and memory ≥ 4 GB, or configured with GPU):
     *
     * Each instance has a free system disk of 100 GiB for persistent storage. **If the DSW instance is stopped and not launched for more than 15 days, the disk is cleared**. The disk can be expanded. For specific pricing, refer to the console.
     * If you need persistent storage, you can **mount a dataset** or add the OSS, NAS, or CPFS path to the **storage path**.
     * @example 100Gi
     *
     * @var string
     */
    public $capacity;

    /**
     * @description The mount path of the cloud disk.
     *
     * @example /mnt/systemDisk
     *
     * @var string
     */
    public $mountPath;

    /**
     * @description The subpath of the cloud disk that is mounted to the instance.
     *
     * @example workspace
     *
     * @var string
     */
    public $path;

    /**
     * @description The disk or snapshot usage.
     *
     * @var status
     */
    public $status;

    /**
     * @description The cloud disk type.
     *
     *   rootfs: Mounts the disk as a system disk. The system environment is stored on the disk.
     *
     * @example rootfs
     *
     * @var string
     */
    public $subType;
    protected $_name = [
        'capacity' => 'Capacity',
        'mountPath' => 'MountPath',
        'path' => 'Path',
        'status' => 'Status',
        'subType' => 'SubType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toMap() : null;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cloudDisks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Status'])) {
            $model->status = status::fromMap($map['Status']);
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class cloudDisks extends Model
{
    /**
     * @description Disk Capacity
     *
     * @example 30Gi
     *
     * @var string
     */
    public $capacity;

    /**
     * @description The mount path of the cloud disk in the container.
     *
     * @example /mmt/workspace
     *
     * @var string
     */
    public $mountPath;

    /**
     * @description The directory on the cloud disk that is mounted to the container.
     *
     * @example /workspace
     *
     * @var string
     */
    public $path;

    /**
     * @description The usage mode of the cloud disk. The value rootfs indicates that the cloud disk is used as the root file system.
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
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class AttachInstancesToNodePoolRequest extends Model
{
    /**
     * @description Specifies whether to store container data and images on data disks. Valid values:
     *
     *   `true`: stores container data and images on data disks.
     *   `false`: does not store container data or images on data disks.
     *
     * How to mount a data disk:
     *
     *   If the ECS instances are already mounted with data disks and the file system of the last data disk is not initialized, the system automatically formats this data disk to ext4 and mounts it to /var/lib/docker and /var/lib/kubelet.
     *   If no data disk is attached to the ECS instances, the system does not purchase a new data disk.
     *
     * > If you choose to store container data and images on a data disk and the data disk is already mounted to the ECS instance, the existing data on the data disk will be cleared. You can back up the disk to avoid data loss.
     * @example false
     *
     * @var bool
     */
    public $formatDisk;

    /**
     * @description The IDs of the instances to be added.
     *
     * @var string[]
     */
    public $instances;

    /**
     * @description Specifies whether to retain the instance name. Valid values:
     *
     *   `true`: retains the instance name.
     *   `false`: does not retain the instance name.
     *
     * Default value: `true`.
     * @example true
     *
     * @var bool
     */
    public $keepInstanceName;

    /**
     * @description The SSH password that is used to log on to the instance.
     *
     * @example Hello1234
     *
     * @var string
     */
    public $password;
    protected $_name = [
        'formatDisk'       => 'format_disk',
        'instances'        => 'instances',
        'keepInstanceName' => 'keep_instance_name',
        'password'         => 'password',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->formatDisk) {
            $res['format_disk'] = $this->formatDisk;
        }
        if (null !== $this->instances) {
            $res['instances'] = $this->instances;
        }
        if (null !== $this->keepInstanceName) {
            $res['keep_instance_name'] = $this->keepInstanceName;
        }
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachInstancesToNodePoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['format_disk'])) {
            $model->formatDisk = $map['format_disk'];
        }
        if (isset($map['instances'])) {
            if (!empty($map['instances'])) {
                $model->instances = $map['instances'];
            }
        }
        if (isset($map['keep_instance_name'])) {
            $model->keepInstanceName = $map['keep_instance_name'];
        }
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }

        return $model;
    }
}

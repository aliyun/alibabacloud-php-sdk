<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\initContainers;

use AlibabaCloud\Tea\Model;

class volumeMounts extends Model
{
    /**
     * @description The directory to which the volume is mounted. Data under this directory is overwritten by the data on the volume.
     *
     * @example /usr/share/
     *
     * @var string
     */
    public $mountPath;

    /**
     * @description The mount propagation settings of volumes. Mount propagation allows the sharing of volumes that are mounted on a container to other containers in the same pod, or even to other pods on the same node. Valid values:
     *
     *   None: The volume mount does not receive subsequent mounts that are mounted to the volume or the subdirectories of the volume.
     *   HostToCotainer: The volume mount receives all subsequent mounts that are mounted to the volume or to the subdirectories of the volume.
     *   Bidirectional: The volume mount behaves the same as the HostToCotainer mount. The volume mount receives all subsequent mounts that are mounted to the volume or to the subdirectories of the volume. In addition, all volume mounts created by the container are propagated back to the host and to all containers of all pods that use the same volume.
     *
     * @example None
     *
     * @var string
     */
    public $mountPropagation;

    /**
     * @description The name of the volume. The name is the same as the volume you selected when you purchased the container.
     *
     * @example test-empty
     *
     * @var string
     */
    public $name;

    /**
     * @description Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $readOnly;
    protected $_name = [
        'mountPath'        => 'MountPath',
        'mountPropagation' => 'MountPropagation',
        'name'             => 'Name',
        'readOnly'         => 'ReadOnly',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }
        if (null !== $this->mountPropagation) {
            $res['MountPropagation'] = $this->mountPropagation;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->readOnly) {
            $res['ReadOnly'] = $this->readOnly;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return volumeMounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }
        if (isset($map['MountPropagation'])) {
            $model->mountPropagation = $map['MountPropagation'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ReadOnly'])) {
            $model->readOnly = $map['ReadOnly'];
        }

        return $model;
    }
}

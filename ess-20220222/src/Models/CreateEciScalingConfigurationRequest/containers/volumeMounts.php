<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\containers;

use AlibabaCloud\Tea\Model;

class volumeMounts extends Model
{
    /**
     * @description The directory on which the container mounts the volume.
     *
     * > Data in this directory is overwritten by the data on the volume.
     * @example /pod/data
     *
     * @var string
     */
    public $mountPath;

    /**
     * @description The mount propagation settings of the volume. Mount propagation allows volumes that are mounted on one container to be shared with other containers in the same pod, or even with other pods on the same node. Valid values:
     *
     *   None: The volume mount does not receive subsequent mounts that are mounted to this volume or its subdirectories.
     *   HostToCotainer: The volume mount receives all subsequent mounts that are mounted to this volume or its subdirectories.
     *   Bidirectional: This value is similar to HostToCotainer. The volume mount receives all subsequent mounts that are mounted to this volume or its subdirectories. In addition, all volume mounts that are created by the container are propagated back to the instance and to all containers of all pods that use the same volume.
     *
     * Default value: None.
     * @example None
     *
     * @var string
     */
    public $mountPropagation;

    /**
     * @description The name of the volume. The value of this parameter is the same as the value of the VolumeName parameter.
     *
     * @example default-volume1
     *
     * @var string
     */
    public $name;

    /**
     * @description Specifies whether the volume is read-only. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $readOnly;

    /**
     * @description The subdirectory of the volume.
     *
     * @example data2/
     *
     * @var string
     */
    public $subPath;
    protected $_name = [
        'mountPath'        => 'MountPath',
        'mountPropagation' => 'MountPropagation',
        'name'             => 'Name',
        'readOnly'         => 'ReadOnly',
        'subPath'          => 'SubPath',
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
        if (null !== $this->subPath) {
            $res['SubPath'] = $this->subPath;
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
        if (isset($map['SubPath'])) {
            $model->subPath = $map['SubPath'];
        }

        return $model;
    }
}

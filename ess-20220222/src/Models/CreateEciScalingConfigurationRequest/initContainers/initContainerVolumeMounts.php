<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\initContainers;

use AlibabaCloud\Tea\Model;

class initContainerVolumeMounts extends Model
{
    /**
     * @description The directory to which the init container mounts the volume. The data stored in this directory is overwritten by the data on the volume. Specify this parameter with caution.
     *
     * @example /usr/share/
     *
     * @var string
     */
    public $mountPath;

    /**
     * @description The mount propagation settings of the volume. Mount propagation enables volume sharing from one container to other containers within the same pod or to containers across separate pods on the same node. Valid values:
     *
     *   None: Subsequent mounts executed on the volume or its subdirectories do not propagate to the volume.
     *   HostToCotainer: Subsequent mounts executed on the volume or its subdirectories propagate to the volume.
     *   Bidirectional: This value is similar to HostToCotainer. Subsequent mounts executed on the volume or its subdirectories propagate to the volume. All volume mounts executed on the container not only propagate back to the underlying host but also to all containers across every pod that uses the same volume.
     *
     * @example None
     *
     * @var string
     */
    public $mountPropagation;

    /**
     * @description The name of the volume.
     *
     * @example test-empty
     *
     * @var string
     */
    public $name;

    /**
     * @description Specifies whether the mount path is read-only.
     *
     * Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $readOnly;

    /**
     * @description The subdirectory of the volume. The pod can mount different directories of the same volume to different subdirectories of init containers.
     *
     * @example /usr/sub/
     *
     * @var string
     */
    public $subPath;
    protected $_name = [
        'mountPath' => 'MountPath',
        'mountPropagation' => 'MountPropagation',
        'name' => 'Name',
        'readOnly' => 'ReadOnly',
        'subPath' => 'SubPath',
    ];

    public function validate() {}

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
     * @return initContainerVolumeMounts
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

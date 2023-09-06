<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest;

use AlibabaCloud\SDK\EHPC\V20180412\Models\CreateClusterRequest\additionalVolumes\roles;
use AlibabaCloud\Tea\Model;

class additionalVolumes extends Model
{
    /**
     * @description The queue of the nodes to which the NAS file system is attached.
     *
     * Valid values of N: 1 to 10.
     * @example high
     *
     * @var string
     */
    public $jobQueue;

    /**
     * @description The local directory on which the NAS file system is mounted.
     *
     * Valid values of N: 1 to 10.
     * @example /ff
     *
     * @var string
     */
    public $localDirectory;

    /**
     * @description The type of the E-HPC cluster. Set the value to PublicCloud.
     *
     * Valid values of N: 1 to 10.
     * @example PublicCloud
     *
     * @var string
     */
    public $location;

    /**
     * @description The remote directory to which the NAS file system is mounted.
     *
     * Valid values of N: 1 to 10.
     * @example /test
     *
     * @var string
     */
    public $remoteDirectory;

    /**
     * @description The node information to which the NAS file system is attached.
     *
     * @var roles[]
     */
    public $roles;

    /**
     * @description The ID of the NAS file system.
     *
     * Valid values of N: 1 to 10.
     * @example extreme-00b88****
     *
     * @var string
     */
    public $volumeId;

    /**
     * @description The mount options of the NAS file system.
     *
     * You can specify 1 to 10 vCPUs.
     * @example -t nfs -o vers=4.0
     *
     * @var string
     */
    public $volumeMountOption;

    /**
     * @description The mount target of the NAS file system.
     *
     * Valid values of N: 1 to 10.
     * @example 0088****-sihc.cn-hangzhou.extreme.nas.aliyuncs.com
     *
     * @var string
     */
    public $volumeMountpoint;

    /**
     * @description The type of the protocol that is used by the NAS file system. Valid value:
     *
     *   NFS
     *   SMB
     *
     * Default value: NFS.
     * @example NFS
     *
     * @var string
     */
    public $volumeProtocol;

    /**
     * @description The type of the additional shared storage. Only NAS file systems are supported.
     *
     * Valid values of N: 1 to 10.
     * @example nas
     *
     * @var string
     */
    public $volumeType;
    protected $_name = [
        'jobQueue'          => 'JobQueue',
        'localDirectory'    => 'LocalDirectory',
        'location'          => 'Location',
        'remoteDirectory'   => 'RemoteDirectory',
        'roles'             => 'Roles',
        'volumeId'          => 'VolumeId',
        'volumeMountOption' => 'VolumeMountOption',
        'volumeMountpoint'  => 'VolumeMountpoint',
        'volumeProtocol'    => 'VolumeProtocol',
        'volumeType'        => 'VolumeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobQueue) {
            $res['JobQueue'] = $this->jobQueue;
        }
        if (null !== $this->localDirectory) {
            $res['LocalDirectory'] = $this->localDirectory;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->remoteDirectory) {
            $res['RemoteDirectory'] = $this->remoteDirectory;
        }
        if (null !== $this->roles) {
            $res['Roles'] = [];
            if (null !== $this->roles && \is_array($this->roles)) {
                $n = 0;
                foreach ($this->roles as $item) {
                    $res['Roles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->volumeId) {
            $res['VolumeId'] = $this->volumeId;
        }
        if (null !== $this->volumeMountOption) {
            $res['VolumeMountOption'] = $this->volumeMountOption;
        }
        if (null !== $this->volumeMountpoint) {
            $res['VolumeMountpoint'] = $this->volumeMountpoint;
        }
        if (null !== $this->volumeProtocol) {
            $res['VolumeProtocol'] = $this->volumeProtocol;
        }
        if (null !== $this->volumeType) {
            $res['VolumeType'] = $this->volumeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return additionalVolumes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobQueue'])) {
            $model->jobQueue = $map['JobQueue'];
        }
        if (isset($map['LocalDirectory'])) {
            $model->localDirectory = $map['LocalDirectory'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['RemoteDirectory'])) {
            $model->remoteDirectory = $map['RemoteDirectory'];
        }
        if (isset($map['Roles'])) {
            if (!empty($map['Roles'])) {
                $model->roles = [];
                $n            = 0;
                foreach ($map['Roles'] as $item) {
                    $model->roles[$n++] = null !== $item ? roles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VolumeId'])) {
            $model->volumeId = $map['VolumeId'];
        }
        if (isset($map['VolumeMountOption'])) {
            $model->volumeMountOption = $map['VolumeMountOption'];
        }
        if (isset($map['VolumeMountpoint'])) {
            $model->volumeMountpoint = $map['VolumeMountpoint'];
        }
        if (isset($map['VolumeProtocol'])) {
            $model->volumeProtocol = $map['VolumeProtocol'];
        }
        if (isset($map['VolumeType'])) {
            $model->volumeType = $map['VolumeType'];
        }

        return $model;
    }
}

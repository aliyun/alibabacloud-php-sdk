<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\UpdateClusterVolumesRequest;

use AlibabaCloud\SDK\EHPC\V20180412\Models\UpdateClusterVolumesRequest\additionalVolumes\roles;
use AlibabaCloud\Tea\Model;

class additionalVolumes extends Model
{
    /**
     * @description The queue name of the nth attached mounted filesystem.
     *
     * @example work
     *
     * @var string
     */
    public $jobQueue;

    /**
     * @description The on-premises mount directory for the nth additional mounted file system.
     *
     * @example /ff
     *
     * @var string
     */
    public $localDirectory;

    /**
     * @description The storage location of the nth attached mounted file system. Valid values:
     *
     *   OnPremise: hybrid cloud cluster
     *   PublicCloud: public cloud cluster
     *
     * @example PublicCloud
     *
     * @var string
     */
    public $location;

    /**
     * @description The remote directory to be mounted by the nth additional mounted file system.
     *
     * @example /test
     *
     * @var string
     */
    public $remoteDirectory;

    /**
     * @var roles[]
     */
    public $roles;

    /**
     * @description The ID of the nth additional mounted file system.
     *
     * @example extreme-00b88****
     *
     * @var string
     */
    public $volumeId;

    /**
     * @description The domain name of the mount target for the nth additional mounted file system.
     *
     * @example 0088****-sihc.cn-hangzhou.extreme.nas.aliyuncs.com
     *
     * @var string
     */
    public $volumeMountpoint;

    /**
     * @description The protocol type of the nth additional mounted file system. Valid values:
     *
     *   NFS
     *   SMB
     *
     * @example NFS
     *
     * @var string
     */
    public $volumeProtocol;

    /**
     * @description The type of the nth additional mounted file system. Currently, only NAS is supported.
     *
     * Valid values of N: 1 to 10.
     * @example NAS
     *
     * @var string
     */
    public $volumeType;
    protected $_name = [
        'jobQueue'         => 'JobQueue',
        'localDirectory'   => 'LocalDirectory',
        'location'         => 'Location',
        'remoteDirectory'  => 'RemoteDirectory',
        'roles'            => 'Roles',
        'volumeId'         => 'VolumeId',
        'volumeMountpoint' => 'VolumeMountpoint',
        'volumeProtocol'   => 'VolumeProtocol',
        'volumeType'       => 'VolumeType',
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

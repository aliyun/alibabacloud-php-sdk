<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\UpdateClusterVolumesRequest;

use AlibabaCloud\SDK\EHPC\V20180412\Models\UpdateClusterVolumesRequest\additionalVolumes\roles;
use AlibabaCloud\Tea\Model;

class additionalVolumes extends Model
{
    /**
     * @description The queue name of the additional mounted file system N.
     *
     * @example work
     *
     * @var string
     */
    public $jobQueue;

    /**
     * @description The on-premises mount directory for the additional mounted file system N.
     *
     * @example /ff
     *
     * @var string
     */
    public $localDirectory;

    /**
     * @description The storage location of the additional mounted file system N. Valid values:
     *
     *   OnPremise: The cluster is deployed on a hybrid cloud.
     *   PublicCloud: The cluster is deployed on a public cloud.
     *
     * @example PublicCloud
     *
     * @var string
     */
    public $location;

    /**
     * @description The remote directory to be mounted by the additional mounted file system N.
     *
     * @example /test
     *
     * @var string
     */
    public $remoteDirectory;

    /**
     * @description The array of the node on which the file system is mounted.
     *
     * @var roles[]
     */
    public $roles;

    /**
     * @description The ID of the additional mounted file system N.
     *
     * @example extreme-00b88****
     *
     * @var string
     */
    public $volumeId;

    /**
     * @example -t nfs -o vers=3,nolock,noresvport
     *
     * @var string
     */
    public $volumeMountOption;

    /**
     * @description The domain name of the mount target for the additional mounted file system N.
     *
     * @example 0088****-sihc.cn-hangzhou.extreme.nas.aliyuncs.com
     *
     * @var string
     */
    public $volumeMountpoint;

    /**
     * @description The protocol type of the additional mounted file system N. Valid values:
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
     * @description The type of the additional mounted file system N. Currently, only NAS is supported.
     *
     * Valid values of N: 1 to 10.
     * @example NAS
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

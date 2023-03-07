<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListVolumesResponseBody\volumes\volumeInfo\additionalVolumes;

use AlibabaCloud\Tea\Model;

class volumeInfo extends Model
{
    /**
     * @description The queue to which the job belongs.
     *
     * @example all.q
     *
     * @var string
     */
    public $jobQueue;

    /**
     * @description The local mount directory.
     *
     * @example /testopt
     *
     * @var string
     */
    public $localDirectory;

    /**
     * @description The location where the cluster was deployed. Valid values:
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
     * @description The remote directory on which the file system is mounted.
     *
     * @example /test
     *
     * @var string
     */
    public $remoteDirectory;

    /**
     * @description The type of the node on which the file system is mounted. Valid values:
     *
     *   Manager: management node
     *   Login: logon node
     *   Compute: compute node
     *
     * @example Compute
     *
     * @var string
     */
    public $role;

    /**
     * @description The ID of the file system.
     *
     * @example 86y3****
     *
     * @var string
     */
    public $volumeId;

    /**
     * @description The domain name of the mount target.
     *
     * @example 86y3****-rgd51.cn-hangzhou.nas.aliyuncs.com
     *
     * @var string
     */
    public $volumeMountpoint;

    /**
     * @description The type of the storage protocol. Valid values:
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
     * @description The type of the additional file system. Only NAS is supported.
     *
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
        'role'             => 'Role',
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
        if (null !== $this->role) {
            $res['Role'] = $this->role;
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
     * @return volumeInfo
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
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetClusterVolumesResponseBody\volumes;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetClusterVolumesResponseBody\volumes\volumeInfo\roles;
use AlibabaCloud\Tea\Model;

class volumeInfo extends Model
{
    /**
     * @description The queue of the job.
     *
     * @example workq
     *
     * @var string
     */
    public $jobQueue;

    /**
     * @description The local mount directory.
     *
     * @example /ehpcdata
     *
     * @var string
     */
    public $localDirectory;

    /**
     * @description The type of cluster. Valid values:
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
     * @description Indicates whether the resource can be unmounted.
     *
     * @example true
     *
     * @var bool
     */
    public $mustKeep;

    /**
     * @description The remote mount directory.
     *
     * @example /test
     *
     * @var string
     */
    public $remoteDirectory;

    /**
     * @description The array of the node on which the file system is mounted.
     *
     * @var roles
     */
    public $roles;

    /**
     * @description The ID of the file system.
     *
     * @example 0e754****
     *
     * @var string
     */
    public $volumeId;

    /**
     * @description The address of the mount target.
     *
     * @example 0e754****-kal90.cn-hangzhou.nas.aliyuncs.com<
     *
     * @var string
     */
    public $volumeMountpoint;

    /**
     * @description The storage protocol type of the file system. Valid values:
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
     * @description The type of the file system. Valid values:
     *
     *   NAS
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
        'mustKeep'         => 'MustKeep',
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
        if (null !== $this->mustKeep) {
            $res['MustKeep'] = $this->mustKeep;
        }
        if (null !== $this->remoteDirectory) {
            $res['RemoteDirectory'] = $this->remoteDirectory;
        }
        if (null !== $this->roles) {
            $res['Roles'] = null !== $this->roles ? $this->roles->toMap() : null;
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
        if (isset($map['MustKeep'])) {
            $model->mustKeep = $map['MustKeep'];
        }
        if (isset($map['RemoteDirectory'])) {
            $model->remoteDirectory = $map['RemoteDirectory'];
        }
        if (isset($map['Roles'])) {
            $model->roles = roles::fromMap($map['Roles']);
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

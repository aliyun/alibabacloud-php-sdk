<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListVolumesResponseBody\volumes;

use AlibabaCloud\Tea\Model;

class additionalVolumes extends Model
{
    /**
     * @var string
     */
    public $jobQueue;

    /**
     * @var string
     */
    public $volumeId;

    /**
     * @var string
     */
    public $remoteDirectory;

    /**
     * @var string
     */
    public $volumeMountpoint;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $localDirectory;

    /**
     * @var string
     */
    public $volumeType;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $volumeProtocol;
    protected $_name = [
        'jobQueue'         => 'JobQueue',
        'volumeId'         => 'VolumeId',
        'remoteDirectory'  => 'RemoteDirectory',
        'volumeMountpoint' => 'VolumeMountpoint',
        'role'             => 'Role',
        'localDirectory'   => 'LocalDirectory',
        'volumeType'       => 'VolumeType',
        'location'         => 'Location',
        'volumeProtocol'   => 'VolumeProtocol',
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
        if (null !== $this->volumeId) {
            $res['VolumeId'] = $this->volumeId;
        }
        if (null !== $this->remoteDirectory) {
            $res['RemoteDirectory'] = $this->remoteDirectory;
        }
        if (null !== $this->volumeMountpoint) {
            $res['VolumeMountpoint'] = $this->volumeMountpoint;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->localDirectory) {
            $res['LocalDirectory'] = $this->localDirectory;
        }
        if (null !== $this->volumeType) {
            $res['VolumeType'] = $this->volumeType;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->volumeProtocol) {
            $res['VolumeProtocol'] = $this->volumeProtocol;
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
        if (isset($map['VolumeId'])) {
            $model->volumeId = $map['VolumeId'];
        }
        if (isset($map['RemoteDirectory'])) {
            $model->remoteDirectory = $map['RemoteDirectory'];
        }
        if (isset($map['VolumeMountpoint'])) {
            $model->volumeMountpoint = $map['VolumeMountpoint'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['LocalDirectory'])) {
            $model->localDirectory = $map['LocalDirectory'];
        }
        if (isset($map['VolumeType'])) {
            $model->volumeType = $map['VolumeType'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['VolumeProtocol'])) {
            $model->volumeProtocol = $map['VolumeProtocol'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetClusterVolumesResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetClusterVolumesResponseBody\volumes\roles;
use AlibabaCloud\Tea\Model;

class volumes extends Model
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
     * @var roles[]
     */
    public $roles;

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
    public $localDirectory;

    /**
     * @var string
     */
    public $volumeType;

    /**
     * @var bool
     */
    public $mustKeep;

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
        'roles'            => 'Roles',
        'remoteDirectory'  => 'RemoteDirectory',
        'volumeMountpoint' => 'VolumeMountpoint',
        'localDirectory'   => 'LocalDirectory',
        'volumeType'       => 'VolumeType',
        'mustKeep'         => 'MustKeep',
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
        if (null !== $this->roles) {
            $res['Roles'] = [];
            if (null !== $this->roles && \is_array($this->roles)) {
                $n = 0;
                foreach ($this->roles as $item) {
                    $res['Roles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->remoteDirectory) {
            $res['RemoteDirectory'] = $this->remoteDirectory;
        }
        if (null !== $this->volumeMountpoint) {
            $res['VolumeMountpoint'] = $this->volumeMountpoint;
        }
        if (null !== $this->localDirectory) {
            $res['LocalDirectory'] = $this->localDirectory;
        }
        if (null !== $this->volumeType) {
            $res['VolumeType'] = $this->volumeType;
        }
        if (null !== $this->mustKeep) {
            $res['MustKeep'] = $this->mustKeep;
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
     * @return volumes
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
        if (isset($map['Roles'])) {
            if (!empty($map['Roles'])) {
                $model->roles = [];
                $n            = 0;
                foreach ($map['Roles'] as $item) {
                    $model->roles[$n++] = null !== $item ? roles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RemoteDirectory'])) {
            $model->remoteDirectory = $map['RemoteDirectory'];
        }
        if (isset($map['VolumeMountpoint'])) {
            $model->volumeMountpoint = $map['VolumeMountpoint'];
        }
        if (isset($map['LocalDirectory'])) {
            $model->localDirectory = $map['LocalDirectory'];
        }
        if (isset($map['VolumeType'])) {
            $model->volumeType = $map['VolumeType'];
        }
        if (isset($map['MustKeep'])) {
            $model->mustKeep = $map['MustKeep'];
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

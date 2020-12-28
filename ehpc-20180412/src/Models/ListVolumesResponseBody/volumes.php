<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListVolumesResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListVolumesResponseBody\volumes\additionalVolumes;
use AlibabaCloud\Tea\Model;

class volumes extends Model
{
    /**
     * @var string
     */
    public $volumeId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $remoteDirectory;

    /**
     * @var string
     */
    public $volumeMountpoint;

    /**
     * @var additionalVolumes[]
     */
    public $additionalVolumes;

    /**
     * @var string
     */
    public $volumeType;

    /**
     * @var string
     */
    public $volumeProtocol;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'volumeId'          => 'VolumeId',
        'clusterName'       => 'ClusterName',
        'remoteDirectory'   => 'RemoteDirectory',
        'volumeMountpoint'  => 'VolumeMountpoint',
        'additionalVolumes' => 'AdditionalVolumes',
        'volumeType'        => 'VolumeType',
        'volumeProtocol'    => 'VolumeProtocol',
        'regionId'          => 'RegionId',
        'clusterId'         => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->volumeId) {
            $res['VolumeId'] = $this->volumeId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->remoteDirectory) {
            $res['RemoteDirectory'] = $this->remoteDirectory;
        }
        if (null !== $this->volumeMountpoint) {
            $res['VolumeMountpoint'] = $this->volumeMountpoint;
        }
        if (null !== $this->additionalVolumes) {
            $res['AdditionalVolumes'] = [];
            if (null !== $this->additionalVolumes && \is_array($this->additionalVolumes)) {
                $n = 0;
                foreach ($this->additionalVolumes as $item) {
                    $res['AdditionalVolumes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->volumeType) {
            $res['VolumeType'] = $this->volumeType;
        }
        if (null !== $this->volumeProtocol) {
            $res['VolumeProtocol'] = $this->volumeProtocol;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
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
        if (isset($map['VolumeId'])) {
            $model->volumeId = $map['VolumeId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['RemoteDirectory'])) {
            $model->remoteDirectory = $map['RemoteDirectory'];
        }
        if (isset($map['VolumeMountpoint'])) {
            $model->volumeMountpoint = $map['VolumeMountpoint'];
        }
        if (isset($map['AdditionalVolumes'])) {
            if (!empty($map['AdditionalVolumes'])) {
                $model->additionalVolumes = [];
                $n                        = 0;
                foreach ($map['AdditionalVolumes'] as $item) {
                    $model->additionalVolumes[$n++] = null !== $item ? additionalVolumes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VolumeType'])) {
            $model->volumeType = $map['VolumeType'];
        }
        if (isset($map['VolumeProtocol'])) {
            $model->volumeProtocol = $map['VolumeProtocol'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}

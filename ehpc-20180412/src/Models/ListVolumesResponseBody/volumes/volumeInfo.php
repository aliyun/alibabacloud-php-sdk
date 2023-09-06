<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListVolumesResponseBody\volumes;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListVolumesResponseBody\volumes\volumeInfo\additionalVolumes;
use AlibabaCloud\Tea\Model;

class volumeInfo extends Model
{
    /**
     * @description The information of additional file systems mounted on E-HPC clusters.
     *
     * @var additionalVolumes
     */
    public $additionalVolumes;

    /**
     * @description The cluster ID.
     *
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The instance name.
     *
     * @example cluster1
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The remote directory on which the file system is mounted.
     *
     * @example /test1
     *
     * @var string
     */
    public $remoteDirectory;

    /**
     * @description The ID of the file system.
     *
     * @example bc8a****
     *
     * @var string
     */
    public $volumeId;

    /**
     * @description The domain name of the mount target.
     *
     * @example bc8a****-rgd51.cn-hangzhou.nas.aliyuncs.com
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
     * @description The type of the file system that is mounted on the cluster. Only NAS is supported.
     *
     * @example NAS
     *
     * @var string
     */
    public $volumeType;
    protected $_name = [
        'additionalVolumes' => 'AdditionalVolumes',
        'clusterId'         => 'ClusterId',
        'clusterName'       => 'ClusterName',
        'regionId'          => 'RegionId',
        'remoteDirectory'   => 'RemoteDirectory',
        'volumeId'          => 'VolumeId',
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
        if (null !== $this->additionalVolumes) {
            $res['AdditionalVolumes'] = null !== $this->additionalVolumes ? $this->additionalVolumes->toMap() : null;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->remoteDirectory) {
            $res['RemoteDirectory'] = $this->remoteDirectory;
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
        if (isset($map['AdditionalVolumes'])) {
            $model->additionalVolumes = additionalVolumes::fromMap($map['AdditionalVolumes']);
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RemoteDirectory'])) {
            $model->remoteDirectory = $map['RemoteDirectory'];
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

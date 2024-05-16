<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationDetailResponseBody\scalingConfiguration;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationDetailResponseBody\scalingConfiguration\volumes\configFileVolumeConfigFileToPaths;
use AlibabaCloud\Tea\Model;

class volumes extends Model
{
    /**
     * @description The paths to the configuration files.
     *
     * @var configFileVolumeConfigFileToPaths[]
     */
    public $configFileVolumeConfigFileToPaths;

    /**
     * @description The default permissions on the ConfigFile volume.
     *
     * @example 0644
     *
     * @var int
     */
    public $configFileVolumeDefaultMode;

    /**
     * @description The ID of the disk volume.
     *
     * @example d-xx
     *
     * @var string
     */
    public $diskVolumeDiskId;

    /**
     * @description The size of the disk volume. Unit: GiB.
     *
     * @example 15
     *
     * @var int
     */
    public $diskVolumeDiskSize;

    /**
     * @description The system type of the disk volume.
     *
     * @example xfs
     *
     * @var string
     */
    public $diskVolumeFsType;

    /**
     * @description The storage medium of the emptyDir volume. If you do not specify a storage medium for the emptyDir volume, the volume stores data in the file system of a node by default. We recommend that you set this parameter to memory. In this case, the emptyDir volume stores data in the specified memory.
     *
     * @example memory
     *
     * @var string
     */
    public $emptyDirVolumeMedium;

    /**
     * @description The storage size of the emptyDir volume.
     *
     * @example 256Mi
     *
     * @var string
     */
    public $emptyDirVolumeSizeLimit;

    /**
     * @description The name of the FlexVolume driver.
     *
     * @example flexvolume
     *
     * @var string
     */
    public $flexVolumeDriver;

    /**
     * @description The type of the mounted file system. The default value is determined by the script of FlexVolume.
     *
     * @example ext4
     *
     * @var string
     */
    public $flexVolumeFsType;

    /**
     * @description The FlexVolume options.
     *
     * @example {"volumeId":"d-2zehdahrwoa7srg****","performanceLevel": "PL2"}
     *
     * @var string
     */
    public $flexVolumeOptions;

    /**
     * @description The path to the HostPath volume on the host.
     *
     * @example /pod/data
     *
     * @var string
     */
    public $hostPathVolumePath;

    /**
     * @description The type of the HostPath volume.
     *
     * @example Directory
     *
     * @var string
     */
    public $hostPathVolumeType;

    /**
     * @description The path to the Network File System (NFS) volume.
     *
     * @example /share
     *
     * @var string
     */
    public $NFSVolumePath;

    /**
     * @description Indicates whether the NFS volume is read-only.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $NFSVolumeReadOnly;

    /**
     * @description The address of the Network File System (NFS) server.
     *
     * @example 3f9cd4a596-naw76.cn-shanghai.nas.aliyuncs.com
     *
     * @var string
     */
    public $NFSVolumeServer;

    /**
     * @description The volume name.
     *
     * @example default-volume1
     *
     * @var string
     */
    public $name;

    /**
     * @description The volume type. Valid values:
     *
     *   EmptyDirVolume
     *   NFSVolume
     *   ConfigFileVolume
     *   FlexVolume
     *
     * @example EmptyDirVolume
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'configFileVolumeConfigFileToPaths' => 'ConfigFileVolumeConfigFileToPaths',
        'configFileVolumeDefaultMode'       => 'ConfigFileVolumeDefaultMode',
        'diskVolumeDiskId'                  => 'DiskVolumeDiskId',
        'diskVolumeDiskSize'                => 'DiskVolumeDiskSize',
        'diskVolumeFsType'                  => 'DiskVolumeFsType',
        'emptyDirVolumeMedium'              => 'EmptyDirVolumeMedium',
        'emptyDirVolumeSizeLimit'           => 'EmptyDirVolumeSizeLimit',
        'flexVolumeDriver'                  => 'FlexVolumeDriver',
        'flexVolumeFsType'                  => 'FlexVolumeFsType',
        'flexVolumeOptions'                 => 'FlexVolumeOptions',
        'hostPathVolumePath'                => 'HostPathVolumePath',
        'hostPathVolumeType'                => 'HostPathVolumeType',
        'NFSVolumePath'                     => 'NFSVolumePath',
        'NFSVolumeReadOnly'                 => 'NFSVolumeReadOnly',
        'NFSVolumeServer'                   => 'NFSVolumeServer',
        'name'                              => 'Name',
        'type'                              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configFileVolumeConfigFileToPaths) {
            $res['ConfigFileVolumeConfigFileToPaths'] = [];
            if (null !== $this->configFileVolumeConfigFileToPaths && \is_array($this->configFileVolumeConfigFileToPaths)) {
                $n = 0;
                foreach ($this->configFileVolumeConfigFileToPaths as $item) {
                    $res['ConfigFileVolumeConfigFileToPaths'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->configFileVolumeDefaultMode) {
            $res['ConfigFileVolumeDefaultMode'] = $this->configFileVolumeDefaultMode;
        }
        if (null !== $this->diskVolumeDiskId) {
            $res['DiskVolumeDiskId'] = $this->diskVolumeDiskId;
        }
        if (null !== $this->diskVolumeDiskSize) {
            $res['DiskVolumeDiskSize'] = $this->diskVolumeDiskSize;
        }
        if (null !== $this->diskVolumeFsType) {
            $res['DiskVolumeFsType'] = $this->diskVolumeFsType;
        }
        if (null !== $this->emptyDirVolumeMedium) {
            $res['EmptyDirVolumeMedium'] = $this->emptyDirVolumeMedium;
        }
        if (null !== $this->emptyDirVolumeSizeLimit) {
            $res['EmptyDirVolumeSizeLimit'] = $this->emptyDirVolumeSizeLimit;
        }
        if (null !== $this->flexVolumeDriver) {
            $res['FlexVolumeDriver'] = $this->flexVolumeDriver;
        }
        if (null !== $this->flexVolumeFsType) {
            $res['FlexVolumeFsType'] = $this->flexVolumeFsType;
        }
        if (null !== $this->flexVolumeOptions) {
            $res['FlexVolumeOptions'] = $this->flexVolumeOptions;
        }
        if (null !== $this->hostPathVolumePath) {
            $res['HostPathVolumePath'] = $this->hostPathVolumePath;
        }
        if (null !== $this->hostPathVolumeType) {
            $res['HostPathVolumeType'] = $this->hostPathVolumeType;
        }
        if (null !== $this->NFSVolumePath) {
            $res['NFSVolumePath'] = $this->NFSVolumePath;
        }
        if (null !== $this->NFSVolumeReadOnly) {
            $res['NFSVolumeReadOnly'] = $this->NFSVolumeReadOnly;
        }
        if (null !== $this->NFSVolumeServer) {
            $res['NFSVolumeServer'] = $this->NFSVolumeServer;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ConfigFileVolumeConfigFileToPaths'])) {
            if (!empty($map['ConfigFileVolumeConfigFileToPaths'])) {
                $model->configFileVolumeConfigFileToPaths = [];
                $n                                        = 0;
                foreach ($map['ConfigFileVolumeConfigFileToPaths'] as $item) {
                    $model->configFileVolumeConfigFileToPaths[$n++] = null !== $item ? configFileVolumeConfigFileToPaths::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ConfigFileVolumeDefaultMode'])) {
            $model->configFileVolumeDefaultMode = $map['ConfigFileVolumeDefaultMode'];
        }
        if (isset($map['DiskVolumeDiskId'])) {
            $model->diskVolumeDiskId = $map['DiskVolumeDiskId'];
        }
        if (isset($map['DiskVolumeDiskSize'])) {
            $model->diskVolumeDiskSize = $map['DiskVolumeDiskSize'];
        }
        if (isset($map['DiskVolumeFsType'])) {
            $model->diskVolumeFsType = $map['DiskVolumeFsType'];
        }
        if (isset($map['EmptyDirVolumeMedium'])) {
            $model->emptyDirVolumeMedium = $map['EmptyDirVolumeMedium'];
        }
        if (isset($map['EmptyDirVolumeSizeLimit'])) {
            $model->emptyDirVolumeSizeLimit = $map['EmptyDirVolumeSizeLimit'];
        }
        if (isset($map['FlexVolumeDriver'])) {
            $model->flexVolumeDriver = $map['FlexVolumeDriver'];
        }
        if (isset($map['FlexVolumeFsType'])) {
            $model->flexVolumeFsType = $map['FlexVolumeFsType'];
        }
        if (isset($map['FlexVolumeOptions'])) {
            $model->flexVolumeOptions = $map['FlexVolumeOptions'];
        }
        if (isset($map['HostPathVolumePath'])) {
            $model->hostPathVolumePath = $map['HostPathVolumePath'];
        }
        if (isset($map['HostPathVolumeType'])) {
            $model->hostPathVolumeType = $map['HostPathVolumeType'];
        }
        if (isset($map['NFSVolumePath'])) {
            $model->NFSVolumePath = $map['NFSVolumePath'];
        }
        if (isset($map['NFSVolumeReadOnly'])) {
            $model->NFSVolumeReadOnly = $map['NFSVolumeReadOnly'];
        }
        if (isset($map['NFSVolumeServer'])) {
            $model->NFSVolumeServer = $map['NFSVolumeServer'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

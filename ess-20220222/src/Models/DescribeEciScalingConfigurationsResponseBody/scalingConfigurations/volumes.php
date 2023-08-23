<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations;

use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeEciScalingConfigurationsResponseBody\scalingConfigurations\volumes\configFileVolumeConfigFileToPaths;
use AlibabaCloud\Tea\Model;

class volumes extends Model
{
    /**
     * @description The relative path to the configuration file.
     *
     * @var configFileVolumeConfigFileToPaths[]
     */
    public $configFileVolumeConfigFileToPaths;

    /**
     * @description The FlexVolume options. Each option is a key-value pair in a JSON string.
     *
     * For example, when you use FlexVolume to mount a disk, the format of options is `{"volumeId":"d-2zehdahrwoa7srg****","performanceLevel": "PL2"}`.
     * @example 0644
     *
     * @var int
     */
    public $configFileVolumeDefaultMode;

    /**
     * @description The storage medium of EmptyDirVolume. If this parameter is left empty, the file system that backs the node is used as the storage medium. If this parameter is set to memory, the memory is used as the storage medium.
     *
     * @example 15
     *
     * @var string
     */
    public $diskVolumeDiskId;

    /**
     * @description The file system type of the volume. The default value is determined by the script of FlexVolume.
     *
     * @example 15
     *
     * @var int
     */
    public $diskVolumeDiskSize;

    /**
     * @description The path to the Network File System (NFS) volume.
     *
     * @example xfs
     *
     * @var string
     */
    public $diskVolumeFsType;

    /**
     * @description The storage size of a disk volume. Unit: GiB.
     *
     * @example memory
     *
     * @var string
     */
    public $emptyDirVolumeMedium;

    /**
     * @var string
     */
    public $emptyDirVolumeSizeLimit;

    /**
     * @description The endpoint of the NFS server.
     *
     * @example flexvolume
     *
     * @var string
     */
    public $flexVolumeDriver;

    /**
     * @description The FlexVolume driver name of the volume.
     *
     * @example ext4
     *
     * @var string
     */
    public $flexVolumeFsType;

    /**
     * @description The name of the volume.
     *
     * @example {"volumeId":"d-2zehdahrwoa7srg****","performanceLevel": "PL2"}
     *
     * @var string
     */
    public $flexVolumeOptions;

    /**
     * @description Indicates whether the NFS volume is read-only.
     *
     * Default value: false.
     * @example /share
     *
     * @var string
     */
    public $NFSVolumePath;

    /**
     * @description The default permissions on the ConfigFile volume.
     *
     * @example false
     *
     * @var bool
     */
    public $NFSVolumeReadOnly;

    /**
     * @description The paths to configuration files.
     *
     * @example 3f9cd4a596-naw76.cn-shanghai.nas.aliyuncs.com
     *
     * @var string
     */
    public $NFSVolumeServer;

    /**
     * @description The paths to configuration files.
     *
     * @example default-volume1
     *
     * @var string
     */
    public $name;

    /**
     * @description The file system type of a disk volume.
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

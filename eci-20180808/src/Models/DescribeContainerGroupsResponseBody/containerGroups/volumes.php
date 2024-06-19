<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeContainerGroupsResponseBody\containerGroups\volumes\configFileVolumeConfigFileToPaths;
use AlibabaCloud\Tea\Model;

class volumes extends Model
{
    /**
     * @description The path of the ConfigFile volume.
     *
     * @var configFileVolumeConfigFileToPaths[]
     */
    public $configFileVolumeConfigFileToPaths;

    /**
     * @description The ID of the disk when you set Type to DiskVolume.
     *
     * @example d-xxxx
     *
     * @var string
     */
    public $diskVolumeDiskId;

    /**
     * @description The file system type of the disk volume.
     *
     * @example xfs
     *
     * @var string
     */
    public $diskVolumeFsType;

    /**
     * @description The storage media for the emptyDir volume. This parameter is empty by default, indicating that the node file system is used as the storage media. Valid values:
     *
     *   Memory: Memory is used as the storage media.
     *   LocalRaid0: Local disks are formed into RAID 0. This value is valid only if an elastic container instance that has local disks mounted is created. For more information, see [Create an elastic container instance that has local disks mounted](https://help.aliyun.com/document_detail/114664.html).
     *
     * @example Memory
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
     * @description The name of the driver when you set the Type parameter to FlexVolume.
     *
     * @example flexvolume
     *
     * @var string
     */
    public $flexVolumeDriver;

    /**
     * @description The file system type when you set the Type parameter to FlexVolume. The default value varies based on the script of the FlexVolume plug-in.
     *
     * @example ntfs
     *
     * @var string
     */
    public $flexVolumeFsType;

    /**
     * @description The options when you set the Type parameter to FlexVolume.
     *
     * @example [nolock,tcp,noresvport]
     *
     * @var string
     */
    public $flexVolumeOptions;

    /**
     * @description The path of the NFS volume.
     *
     * @example /eci
     *
     * @var string
     */
    public $NFSVolumePath;

    /**
     * @description Indicates whether the NFS volume is read-only.
     *
     * @example false
     *
     * @var bool
     */
    public $NFSVolumeReadOnly;

    /**
     * @description The address of the NFS server.
     *
     * @example 0eafxxxxx-xxxxx.cn-hangzhou.nas.aliyuncs.com
     *
     * @var string
     */
    public $NFSVolumeServer;

    /**
     * @description The volume name.
     *
     * @example test-empty
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the volume. Valid values:
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
        'diskVolumeDiskId'                  => 'DiskVolumeDiskId',
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
        if (null !== $this->diskVolumeDiskId) {
            $res['DiskVolumeDiskId'] = $this->diskVolumeDiskId;
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
        if (isset($map['DiskVolumeDiskId'])) {
            $model->diskVolumeDiskId = $map['DiskVolumeDiskId'];
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

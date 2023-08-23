<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest;

use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\volumes\configFileVolumeConfigFileToPaths;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\volumes\diskVolume;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\volumes\emptyDirVolume;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\volumes\flexVolume;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\volumes\hostPathVolume;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\volumes\NFSVolume;
use AlibabaCloud\Tea\Model;

class volumes extends Model
{
    /**
     * @var diskVolume
     */
    public $diskVolume;

    /**
     * @var emptyDirVolume
     */
    public $emptyDirVolume;

    /**
     * @var flexVolume
     */
    public $flexVolume;

    /**
     * @var hostPathVolume
     */
    public $hostPathVolume;

    /**
     * @var NFSVolume
     */
    public $NFSVolume;

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
     * @description The name of the volume.
     *
     * @example default-volume1
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the Host file or path. Examples: File, Directory, and Socket.
     *
     * @example ConfigFileVolume
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'diskVolume'                        => 'DiskVolume',
        'emptyDirVolume'                    => 'EmptyDirVolume',
        'flexVolume'                        => 'FlexVolume',
        'hostPathVolume'                    => 'HostPathVolume',
        'NFSVolume'                         => 'NFSVolume',
        'configFileVolumeConfigFileToPaths' => 'ConfigFileVolumeConfigFileToPaths',
        'configFileVolumeDefaultMode'       => 'ConfigFileVolumeDefaultMode',
        'name'                              => 'Name',
        'type'                              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskVolume) {
            $res['DiskVolume'] = null !== $this->diskVolume ? $this->diskVolume->toMap() : null;
        }
        if (null !== $this->emptyDirVolume) {
            $res['EmptyDirVolume'] = null !== $this->emptyDirVolume ? $this->emptyDirVolume->toMap() : null;
        }
        if (null !== $this->flexVolume) {
            $res['FlexVolume'] = null !== $this->flexVolume ? $this->flexVolume->toMap() : null;
        }
        if (null !== $this->hostPathVolume) {
            $res['HostPathVolume'] = null !== $this->hostPathVolume ? $this->hostPathVolume->toMap() : null;
        }
        if (null !== $this->NFSVolume) {
            $res['NFSVolume'] = null !== $this->NFSVolume ? $this->NFSVolume->toMap() : null;
        }
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
        if (isset($map['DiskVolume'])) {
            $model->diskVolume = diskVolume::fromMap($map['DiskVolume']);
        }
        if (isset($map['EmptyDirVolume'])) {
            $model->emptyDirVolume = emptyDirVolume::fromMap($map['EmptyDirVolume']);
        }
        if (isset($map['FlexVolume'])) {
            $model->flexVolume = flexVolume::fromMap($map['FlexVolume']);
        }
        if (isset($map['HostPathVolume'])) {
            $model->hostPathVolume = hostPathVolume::fromMap($map['HostPathVolume']);
        }
        if (isset($map['NFSVolume'])) {
            $model->NFSVolume = NFSVolume::fromMap($map['NFSVolume']);
        }
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

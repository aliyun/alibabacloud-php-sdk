<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\volumes\configFileVolumeConfigFileToPaths;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\volumes\diskVolume;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\volumes\emptyDirVolume;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\volumes\flexVolume;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\volumes\hostPathVolume;
use AlibabaCloud\SDK\Ess\V20220222\Models\CreateEciScalingConfigurationRequest\volumes\NFSVolume;

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
     * @var configFileVolumeConfigFileToPaths[]
     */
    public $configFileVolumeConfigFileToPaths;
    /**
     * @var int
     */
    public $configFileVolumeDefaultMode;
    /**
     * @var string
     */
    public $name;
    /**
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
        if (null !== $this->diskVolume) {
            $this->diskVolume->validate();
        }
        if (null !== $this->emptyDirVolume) {
            $this->emptyDirVolume->validate();
        }
        if (null !== $this->flexVolume) {
            $this->flexVolume->validate();
        }
        if (null !== $this->hostPathVolume) {
            $this->hostPathVolume->validate();
        }
        if (null !== $this->NFSVolume) {
            $this->NFSVolume->validate();
        }
        if (\is_array($this->configFileVolumeConfigFileToPaths)) {
            Model::validateArray($this->configFileVolumeConfigFileToPaths);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diskVolume) {
            $res['DiskVolume'] = null !== $this->diskVolume ? $this->diskVolume->toArray($noStream) : $this->diskVolume;
        }

        if (null !== $this->emptyDirVolume) {
            $res['EmptyDirVolume'] = null !== $this->emptyDirVolume ? $this->emptyDirVolume->toArray($noStream) : $this->emptyDirVolume;
        }

        if (null !== $this->flexVolume) {
            $res['FlexVolume'] = null !== $this->flexVolume ? $this->flexVolume->toArray($noStream) : $this->flexVolume;
        }

        if (null !== $this->hostPathVolume) {
            $res['HostPathVolume'] = null !== $this->hostPathVolume ? $this->hostPathVolume->toArray($noStream) : $this->hostPathVolume;
        }

        if (null !== $this->NFSVolume) {
            $res['NFSVolume'] = null !== $this->NFSVolume ? $this->NFSVolume->toArray($noStream) : $this->NFSVolume;
        }

        if (null !== $this->configFileVolumeConfigFileToPaths) {
            if (\is_array($this->configFileVolumeConfigFileToPaths)) {
                $res['ConfigFileVolumeConfigFileToPaths'] = [];
                $n1                                       = 0;
                foreach ($this->configFileVolumeConfigFileToPaths as $item1) {
                    $res['ConfigFileVolumeConfigFileToPaths'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1                                       = 0;
                foreach ($map['ConfigFileVolumeConfigFileToPaths'] as $item1) {
                    $model->configFileVolumeConfigFileToPaths[$n1++] = configFileVolumeConfigFileToPaths::fromMap($item1);
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

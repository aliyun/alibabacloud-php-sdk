<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest\importImageOptions\diskDeviceMappings;
use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateImagePipelineRequest\importImageOptions\features;

class importImageOptions extends Model
{
    /**
     * @var string
     */
    public $architecture;

    /**
     * @var string
     */
    public $bootMode;

    /**
     * @var diskDeviceMappings[]
     */
    public $diskDeviceMappings;

    /**
     * @var features
     */
    public $features;

    /**
     * @var string
     */
    public $licenseType;

    /**
     * @var string
     */
    public $OSType;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var bool
     */
    public $retainImportedImage;
    protected $_name = [
        'architecture' => 'Architecture',
        'bootMode' => 'BootMode',
        'diskDeviceMappings' => 'DiskDeviceMappings',
        'features' => 'Features',
        'licenseType' => 'LicenseType',
        'OSType' => 'OSType',
        'platform' => 'Platform',
        'retainImportedImage' => 'RetainImportedImage',
    ];

    public function validate()
    {
        if (\is_array($this->diskDeviceMappings)) {
            Model::validateArray($this->diskDeviceMappings);
        }
        if (null !== $this->features) {
            $this->features->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }

        if (null !== $this->bootMode) {
            $res['BootMode'] = $this->bootMode;
        }

        if (null !== $this->diskDeviceMappings) {
            if (\is_array($this->diskDeviceMappings)) {
                $res['DiskDeviceMappings'] = [];
                $n1 = 0;
                foreach ($this->diskDeviceMappings as $item1) {
                    $res['DiskDeviceMappings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->features) {
            $res['Features'] = null !== $this->features ? $this->features->toArray($noStream) : $this->features;
        }

        if (null !== $this->licenseType) {
            $res['LicenseType'] = $this->licenseType;
        }

        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->retainImportedImage) {
            $res['RetainImportedImage'] = $this->retainImportedImage;
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
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }

        if (isset($map['BootMode'])) {
            $model->bootMode = $map['BootMode'];
        }

        if (isset($map['DiskDeviceMappings'])) {
            if (!empty($map['DiskDeviceMappings'])) {
                $model->diskDeviceMappings = [];
                $n1 = 0;
                foreach ($map['DiskDeviceMappings'] as $item1) {
                    $model->diskDeviceMappings[$n1++] = diskDeviceMappings::fromMap($item1);
                }
            }
        }

        if (isset($map['Features'])) {
            $model->features = features::fromMap($map['Features']);
        }

        if (isset($map['LicenseType'])) {
            $model->licenseType = $map['LicenseType'];
        }

        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['RetainImportedImage'])) {
            $model->retainImportedImage = $map['RetainImportedImage'];
        }

        return $model;
    }
}

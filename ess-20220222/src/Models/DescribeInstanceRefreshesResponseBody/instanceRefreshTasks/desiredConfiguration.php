<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeInstanceRefreshesResponseBody\instanceRefreshTasks;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeInstanceRefreshesResponseBody\instanceRefreshTasks\desiredConfiguration\containers;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeInstanceRefreshesResponseBody\instanceRefreshTasks\desiredConfiguration\launchTemplateOverrides;

class desiredConfiguration extends Model
{
    /**
     * @var containers[]
     */
    public $containers;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $launchTemplateId;

    /**
     * @var launchTemplateOverrides[]
     */
    public $launchTemplateOverrides;

    /**
     * @var string
     */
    public $launchTemplateVersion;

    /**
     * @var string
     */
    public $scalingConfigurationId;
    protected $_name = [
        'containers' => 'Containers',
        'imageId' => 'ImageId',
        'launchTemplateId' => 'LaunchTemplateId',
        'launchTemplateOverrides' => 'LaunchTemplateOverrides',
        'launchTemplateVersion' => 'LaunchTemplateVersion',
        'scalingConfigurationId' => 'ScalingConfigurationId',
    ];

    public function validate()
    {
        if (\is_array($this->containers)) {
            Model::validateArray($this->containers);
        }
        if (\is_array($this->launchTemplateOverrides)) {
            Model::validateArray($this->launchTemplateOverrides);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containers) {
            if (\is_array($this->containers)) {
                $res['Containers'] = [];
                $n1 = 0;
                foreach ($this->containers as $item1) {
                    $res['Containers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }

        if (null !== $this->launchTemplateOverrides) {
            if (\is_array($this->launchTemplateOverrides)) {
                $res['LaunchTemplateOverrides'] = [];
                $n1 = 0;
                foreach ($this->launchTemplateOverrides as $item1) {
                    $res['LaunchTemplateOverrides'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->launchTemplateVersion) {
            $res['LaunchTemplateVersion'] = $this->launchTemplateVersion;
        }

        if (null !== $this->scalingConfigurationId) {
            $res['ScalingConfigurationId'] = $this->scalingConfigurationId;
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
        if (isset($map['Containers'])) {
            if (!empty($map['Containers'])) {
                $model->containers = [];
                $n1 = 0;
                foreach ($map['Containers'] as $item1) {
                    $model->containers[$n1] = containers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }

        if (isset($map['LaunchTemplateOverrides'])) {
            if (!empty($map['LaunchTemplateOverrides'])) {
                $model->launchTemplateOverrides = [];
                $n1 = 0;
                foreach ($map['LaunchTemplateOverrides'] as $item1) {
                    $model->launchTemplateOverrides[$n1] = launchTemplateOverrides::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LaunchTemplateVersion'])) {
            $model->launchTemplateVersion = $map['LaunchTemplateVersion'];
        }

        if (isset($map['ScalingConfigurationId'])) {
            $model->scalingConfigurationId = $map['ScalingConfigurationId'];
        }

        return $model;
    }
}

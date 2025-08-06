<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAutoProvisioningGroupsResponseBody\autoProvisioningGroups\autoProvisioningGroup\launchTemplateConfigs\launchTemplateConfig;

class launchTemplateConfigs extends Model
{
    /**
     * @var launchTemplateConfig[]
     */
    public $launchTemplateConfig;
    protected $_name = [
        'launchTemplateConfig' => 'LaunchTemplateConfig',
    ];

    public function validate()
    {
        if (\is_array($this->launchTemplateConfig)) {
            Model::validateArray($this->launchTemplateConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->launchTemplateConfig) {
            if (\is_array($this->launchTemplateConfig)) {
                $res['LaunchTemplateConfig'] = [];
                $n1 = 0;
                foreach ($this->launchTemplateConfig as $item1) {
                    $res['LaunchTemplateConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['LaunchTemplateConfig'])) {
            if (!empty($map['LaunchTemplateConfig'])) {
                $model->launchTemplateConfig = [];
                $n1 = 0;
                foreach ($map['LaunchTemplateConfig'] as $item1) {
                    $model->launchTemplateConfig[$n1] = launchTemplateConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

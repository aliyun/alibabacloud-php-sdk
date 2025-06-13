<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantSettingsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantSettingsResponseBody\slsDeliveryConfigs\slsDeliveryConfig;

class slsDeliveryConfigs extends Model
{
    /**
     * @var slsDeliveryConfig[]
     */
    public $slsDeliveryConfig;
    protected $_name = [
        'slsDeliveryConfig' => 'SlsDeliveryConfig',
    ];

    public function validate()
    {
        if (\is_array($this->slsDeliveryConfig)) {
            Model::validateArray($this->slsDeliveryConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->slsDeliveryConfig) {
            if (\is_array($this->slsDeliveryConfig)) {
                $res['SlsDeliveryConfig'] = [];
                $n1 = 0;
                foreach ($this->slsDeliveryConfig as $item1) {
                    $res['SlsDeliveryConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SlsDeliveryConfig'])) {
            if (!empty($map['SlsDeliveryConfig'])) {
                $model->slsDeliveryConfig = [];
                $n1 = 0;
                foreach ($map['SlsDeliveryConfig'] as $item1) {
                    $model->slsDeliveryConfig[$n1] = slsDeliveryConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantSettingsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantSettingsResponseBody\slsDeliveryConfigs\slsDeliveryConfig;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->slsDeliveryConfig) {
            $res['SlsDeliveryConfig'] = [];
            if (null !== $this->slsDeliveryConfig && \is_array($this->slsDeliveryConfig)) {
                $n = 0;
                foreach ($this->slsDeliveryConfig as $item) {
                    $res['SlsDeliveryConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slsDeliveryConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SlsDeliveryConfig'])) {
            if (!empty($map['SlsDeliveryConfig'])) {
                $model->slsDeliveryConfig = [];
                $n                        = 0;
                foreach ($map['SlsDeliveryConfig'] as $item) {
                    $model->slsDeliveryConfig[$n++] = null !== $item ? slsDeliveryConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantSettingsResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantSettingsResponseBody\ossDeliveryConfigs\ossDeliveryConfig;
use AlibabaCloud\Tea\Model;

class ossDeliveryConfigs extends Model
{
    /**
     * @var ossDeliveryConfig[]
     */
    public $ossDeliveryConfig;
    protected $_name = [
        'ossDeliveryConfig' => 'OssDeliveryConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossDeliveryConfig) {
            $res['OssDeliveryConfig'] = [];
            if (null !== $this->ossDeliveryConfig && \is_array($this->ossDeliveryConfig)) {
                $n = 0;
                foreach ($this->ossDeliveryConfig as $item) {
                    $res['OssDeliveryConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ossDeliveryConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OssDeliveryConfig'])) {
            if (!empty($map['OssDeliveryConfig'])) {
                $model->ossDeliveryConfig = [];
                $n                        = 0;
                foreach ($map['OssDeliveryConfig'] as $item) {
                    $model->ossDeliveryConfig[$n++] = null !== $item ? ossDeliveryConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

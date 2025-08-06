<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantSettingsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantSettingsResponseBody\ossDeliveryConfigs\ossDeliveryConfig;

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
        if (\is_array($this->ossDeliveryConfig)) {
            Model::validateArray($this->ossDeliveryConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ossDeliveryConfig) {
            if (\is_array($this->ossDeliveryConfig)) {
                $res['OssDeliveryConfig'] = [];
                $n1 = 0;
                foreach ($this->ossDeliveryConfig as $item1) {
                    $res['OssDeliveryConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OssDeliveryConfig'])) {
            if (!empty($map['OssDeliveryConfig'])) {
                $model->ossDeliveryConfig = [];
                $n1 = 0;
                foreach ($map['OssDeliveryConfig'] as $item1) {
                    $model->ossDeliveryConfig[$n1] = ossDeliveryConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

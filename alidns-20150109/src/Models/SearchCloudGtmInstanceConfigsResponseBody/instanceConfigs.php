<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmInstanceConfigsResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\SearchCloudGtmInstanceConfigsResponseBody\instanceConfigs\instanceConfig;
use AlibabaCloud\Tea\Model;

class instanceConfigs extends Model
{
    /**
     * @var instanceConfig[]
     */
    public $instanceConfig;
    protected $_name = [
        'instanceConfig' => 'InstanceConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceConfig) {
            $res['InstanceConfig'] = [];
            if (null !== $this->instanceConfig && \is_array($this->instanceConfig)) {
                $n = 0;
                foreach ($this->instanceConfig as $item) {
                    $res['InstanceConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceConfig'])) {
            if (!empty($map['InstanceConfig'])) {
                $model->instanceConfig = [];
                $n                     = 0;
                foreach ($map['InstanceConfig'] as $item) {
                    $model->instanceConfig[$n++] = null !== $item ? instanceConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

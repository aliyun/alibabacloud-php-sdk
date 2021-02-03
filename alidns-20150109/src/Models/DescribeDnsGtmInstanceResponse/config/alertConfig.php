<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceResponse\config;

use AlibabaCloud\Tea\Model;

class alertConfig extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceResponse\config\alertConfig\alertConfig[]
     */
    public $alertConfig;
    protected $_name = [
        'alertConfig' => 'AlertConfig',
    ];

    public function validate()
    {
        Model::validateRequired('alertConfig', $this->alertConfig, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertConfig) {
            $res['AlertConfig'] = [];
            if (null !== $this->alertConfig && \is_array($this->alertConfig)) {
                $n = 0;
                foreach ($this->alertConfig as $item) {
                    $res['AlertConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertConfig'])) {
            if (!empty($map['AlertConfig'])) {
                $model->alertConfig = [];
                $n                  = 0;
                foreach ($map['AlertConfig'] as $item) {
                    $model->alertConfig[$n++] = null !== $item ? \AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceResponse\config\alertConfig\alertConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

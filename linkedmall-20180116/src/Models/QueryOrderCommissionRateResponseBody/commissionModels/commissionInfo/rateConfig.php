<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderCommissionRateResponseBody\commissionModels\commissionInfo;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderCommissionRateResponseBody\commissionModels\commissionInfo\rateConfig\configs;
use AlibabaCloud\Tea\Model;

class rateConfig extends Model
{
    /**
     * @var configs[]
     */
    public $configs;
    protected $_name = [
        'configs' => 'Configs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configs) {
            $res['Configs'] = [];
            if (null !== $this->configs && \is_array($this->configs)) {
                $n = 0;
                foreach ($this->configs as $item) {
                    $res['Configs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rateConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Configs'])) {
            if (!empty($map['Configs'])) {
                $model->configs = [];
                $n              = 0;
                foreach ($map['Configs'] as $item) {
                    $model->configs[$n++] = null !== $item ? configs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

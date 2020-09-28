<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetCustomIdentValuesResponse\data;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetCustomIdentValuesResponse\data\customIdentDataInfo\customModelTrend;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetCustomIdentValuesResponse\data\customIdentDataInfo\customResidual;
use AlibabaCloud\Tea\Model;

class customIdentDataInfo extends Model
{
    /**
     * @var customModelTrend[]
     */
    public $customModelTrend;

    /**
     * @var customResidual[]
     */
    public $customResidual;
    protected $_name = [
        'customModelTrend' => 'CustomModelTrend',
        'customResidual'   => 'CustomResidual',
    ];

    public function validate()
    {
        Model::validateRequired('customModelTrend', $this->customModelTrend, true);
        Model::validateRequired('customResidual', $this->customResidual, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customModelTrend) {
            $res['CustomModelTrend'] = [];
            if (null !== $this->customModelTrend && \is_array($this->customModelTrend)) {
                $n = 0;
                foreach ($this->customModelTrend as $item) {
                    $res['CustomModelTrend'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->customResidual) {
            $res['CustomResidual'] = [];
            if (null !== $this->customResidual && \is_array($this->customResidual)) {
                $n = 0;
                foreach ($this->customResidual as $item) {
                    $res['CustomResidual'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customIdentDataInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomModelTrend'])) {
            if (!empty($map['CustomModelTrend'])) {
                $model->customModelTrend = [];
                $n                       = 0;
                foreach ($map['CustomModelTrend'] as $item) {
                    $model->customModelTrend[$n++] = null !== $item ? customModelTrend::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CustomResidual'])) {
            if (!empty($map['CustomResidual'])) {
                $model->customResidual = [];
                $n                     = 0;
                foreach ($map['CustomResidual'] as $item) {
                    $model->customResidual[$n++] = null !== $item ? customResidual::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

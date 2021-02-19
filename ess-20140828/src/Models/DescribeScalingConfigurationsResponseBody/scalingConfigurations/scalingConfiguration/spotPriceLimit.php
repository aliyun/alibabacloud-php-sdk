<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\scalingConfiguration;

use AlibabaCloud\SDK\Ess\V20140828\Models\DescribeScalingConfigurationsResponseBody\scalingConfigurations\scalingConfiguration\spotPriceLimit\spotPriceModel;
use AlibabaCloud\Tea\Model;

class spotPriceLimit extends Model
{
    /**
     * @var spotPriceModel[]
     */
    public $spotPriceModel;
    protected $_name = [
        'spotPriceModel' => 'SpotPriceModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spotPriceModel) {
            $res['SpotPriceModel'] = [];
            if (null !== $this->spotPriceModel && \is_array($this->spotPriceModel)) {
                $n = 0;
                foreach ($this->spotPriceModel as $item) {
                    $res['SpotPriceModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spotPriceLimit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpotPriceModel'])) {
            if (!empty($map['SpotPriceModel'])) {
                $model->spotPriceModel = [];
                $n                     = 0;
                foreach ($map['SpotPriceModel'] as $item) {
                    $model->spotPriceModel[$n++] = null !== $item ? spotPriceModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeMyBaseInstanceOverViewResponseBody;

use AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeMyBaseInstanceOverViewResponseBody\regions\regionModel;
use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @var regionModel[]
     */
    public $regionModel;
    protected $_name = [
        'regionModel' => 'RegionModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionModel) {
            $res['RegionModel'] = [];
            if (null !== $this->regionModel && \is_array($this->regionModel)) {
                $n = 0;
                foreach ($this->regionModel as $item) {
                    $res['RegionModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionModel'])) {
            if (!empty($map['RegionModel'])) {
                $model->regionModel = [];
                $n                  = 0;
                foreach ($map['RegionModel'] as $item) {
                    $model->regionModel[$n++] = null !== $item ? regionModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

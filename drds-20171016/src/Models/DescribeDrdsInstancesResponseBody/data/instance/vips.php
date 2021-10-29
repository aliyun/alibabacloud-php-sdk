<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsInstancesResponseBody\data\instance;

use AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsInstancesResponseBody\data\instance\vips\vip;
use AlibabaCloud\Tea\Model;

class vips extends Model
{
    /**
     * @var vip[]
     */
    public $vip;
    protected $_name = [
        'vip' => 'Vip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vip) {
            $res['Vip'] = [];
            if (null !== $this->vip && \is_array($this->vip)) {
                $n = 0;
                foreach ($this->vip as $item) {
                    $res['Vip'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vips
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Vip'])) {
            if (!empty($map['Vip'])) {
                $model->vip = [];
                $n          = 0;
                foreach ($map['Vip'] as $item) {
                    $model->vip[$n++] = null !== $item ? vip::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

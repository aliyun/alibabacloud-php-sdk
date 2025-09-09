<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstancesResponseBody\instances\instance;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsInstancesResponseBody\instances\instance\vips\vip;

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
        if (\is_array($this->vip)) {
            Model::validateArray($this->vip);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vip) {
            if (\is_array($this->vip)) {
                $res['Vip'] = [];
                $n1 = 0;
                foreach ($this->vip as $item1) {
                    $res['Vip'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Vip'])) {
            if (!empty($map['Vip'])) {
                $model->vip = [];
                $n1 = 0;
                foreach ($map['Vip'] as $item1) {
                    $model->vip[$n1] = vip::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

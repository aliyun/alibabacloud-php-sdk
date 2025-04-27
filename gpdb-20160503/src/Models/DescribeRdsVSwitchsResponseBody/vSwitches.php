<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVSwitchsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeRdsVSwitchsResponseBody\vSwitches\vSwitch;

class vSwitches extends Model
{
    /**
     * @var vSwitch[]
     */
    public $vSwitch;
    protected $_name = [
        'vSwitch' => 'VSwitch',
    ];

    public function validate()
    {
        if (\is_array($this->vSwitch)) {
            Model::validateArray($this->vSwitch);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vSwitch) {
            if (\is_array($this->vSwitch)) {
                $res['VSwitch'] = [];
                $n1 = 0;
                foreach ($this->vSwitch as $item1) {
                    $res['VSwitch'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VSwitch'])) {
            if (!empty($map['VSwitch'])) {
                $model->vSwitch = [];
                $n1 = 0;
                foreach ($map['VSwitch'] as $item1) {
                    $model->vSwitch[$n1++] = vSwitch::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

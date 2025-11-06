<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\ListInstanceAlarmResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListInstanceAlarmResponseBody\data\voList\commodityInstanceAlarmVO;

class voList extends Model
{
    /**
     * @var commodityInstanceAlarmVO[]
     */
    public $commodityInstanceAlarmVO;
    protected $_name = [
        'commodityInstanceAlarmVO' => 'CommodityInstanceAlarmVO',
    ];

    public function validate()
    {
        if (\is_array($this->commodityInstanceAlarmVO)) {
            Model::validateArray($this->commodityInstanceAlarmVO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commodityInstanceAlarmVO) {
            if (\is_array($this->commodityInstanceAlarmVO)) {
                $res['CommodityInstanceAlarmVO'] = [];
                $n1 = 0;
                foreach ($this->commodityInstanceAlarmVO as $item1) {
                    $res['CommodityInstanceAlarmVO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CommodityInstanceAlarmVO'])) {
            if (!empty($map['CommodityInstanceAlarmVO'])) {
                $model->commodityInstanceAlarmVO = [];
                $n1 = 0;
                foreach ($map['CommodityInstanceAlarmVO'] as $item1) {
                    $model->commodityInstanceAlarmVO[$n1] = commodityInstanceAlarmVO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

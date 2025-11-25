<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeStatisticSummaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeStatisticSummaryResponseBody\zoneRequestTops\zoneRequestTop;

class zoneRequestTops extends Model
{
    /**
     * @var zoneRequestTop[]
     */
    public $zoneRequestTop;
    protected $_name = [
        'zoneRequestTop' => 'ZoneRequestTop',
    ];

    public function validate()
    {
        if (\is_array($this->zoneRequestTop)) {
            Model::validateArray($this->zoneRequestTop);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->zoneRequestTop) {
            if (\is_array($this->zoneRequestTop)) {
                $res['ZoneRequestTop'] = [];
                $n1 = 0;
                foreach ($this->zoneRequestTop as $item1) {
                    $res['ZoneRequestTop'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ZoneRequestTop'])) {
            if (!empty($map['ZoneRequestTop'])) {
                $model->zoneRequestTop = [];
                $n1 = 0;
                foreach ($map['ZoneRequestTop'] as $item1) {
                    $model->zoneRequestTop[$n1] = zoneRequestTop::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

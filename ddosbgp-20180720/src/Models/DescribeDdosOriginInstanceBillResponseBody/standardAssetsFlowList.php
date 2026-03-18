<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeDdosOriginInstanceBillResponseBody;

use AlibabaCloud\Dara\Model;

class standardAssetsFlowList extends Model
{
    /**
     * @var string
     */
    public $memberFlow;

    /**
     * @var string
     */
    public $regionFlow;

    /**
     * @var int
     */
    public $time;

    /**
     * @var int
     */
    public $totalFlow;
    protected $_name = [
        'memberFlow' => 'MemberFlow',
        'regionFlow' => 'RegionFlow',
        'time' => 'Time',
        'totalFlow' => 'TotalFlow',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memberFlow) {
            $res['MemberFlow'] = $this->memberFlow;
        }

        if (null !== $this->regionFlow) {
            $res['RegionFlow'] = $this->regionFlow;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        if (null !== $this->totalFlow) {
            $res['TotalFlow'] = $this->totalFlow;
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
        if (isset($map['MemberFlow'])) {
            $model->memberFlow = $map['MemberFlow'];
        }

        if (isset($map['RegionFlow'])) {
            $model->regionFlow = $map['RegionFlow'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        if (isset($map['TotalFlow'])) {
            $model->totalFlow = $map['TotalFlow'];
        }

        return $model;
    }
}

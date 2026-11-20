<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\QueryModelUsageInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $activeModelCount;

    /**
     * @var int
     */
    public $callCount;

    /**
     * @var float
     */
    public $pointsConsumption;
    protected $_name = [
        'activeModelCount' => 'ActiveModelCount',
        'callCount' => 'CallCount',
        'pointsConsumption' => 'PointsConsumption',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeModelCount) {
            $res['ActiveModelCount'] = $this->activeModelCount;
        }

        if (null !== $this->callCount) {
            $res['CallCount'] = $this->callCount;
        }

        if (null !== $this->pointsConsumption) {
            $res['PointsConsumption'] = $this->pointsConsumption;
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
        if (isset($map['ActiveModelCount'])) {
            $model->activeModelCount = $map['ActiveModelCount'];
        }

        if (isset($map['CallCount'])) {
            $model->callCount = $map['CallCount'];
        }

        if (isset($map['PointsConsumption'])) {
            $model->pointsConsumption = $map['PointsConsumption'];
        }

        return $model;
    }
}

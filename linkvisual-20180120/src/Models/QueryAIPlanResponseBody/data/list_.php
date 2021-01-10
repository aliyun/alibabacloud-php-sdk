<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryAIPlanResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $planId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $planTemplateId;

    /**
     * @var int
     */
    public $triggerEnum;

    /**
     * @var int
     */
    public $intervalTiming;

    /**
     * @var int
     */
    public $preTiming;

    /**
     * @var string
     */
    public $description;
    protected $_name = [
        'planId'         => 'PlanId',
        'appId'          => 'AppId',
        'planTemplateId' => 'PlanTemplateId',
        'triggerEnum'    => 'TriggerEnum',
        'intervalTiming' => 'IntervalTiming',
        'preTiming'      => 'PreTiming',
        'description'    => 'Description',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->planTemplateId) {
            $res['PlanTemplateId'] = $this->planTemplateId;
        }
        if (null !== $this->triggerEnum) {
            $res['TriggerEnum'] = $this->triggerEnum;
        }
        if (null !== $this->intervalTiming) {
            $res['IntervalTiming'] = $this->intervalTiming;
        }
        if (null !== $this->preTiming) {
            $res['PreTiming'] = $this->preTiming;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['PlanTemplateId'])) {
            $model->planTemplateId = $map['PlanTemplateId'];
        }
        if (isset($map['TriggerEnum'])) {
            $model->triggerEnum = $map['TriggerEnum'];
        }
        if (isset($map['IntervalTiming'])) {
            $model->intervalTiming = $map['IntervalTiming'];
        }
        if (isset($map['PreTiming'])) {
            $model->preTiming = $map['PreTiming'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}

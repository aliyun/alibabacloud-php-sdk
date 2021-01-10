<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryAIPlanTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $planTemplateId;

    /**
     * @var string
     */
    public $appTemplateId;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var int
     */
    public $triggerEnum;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $intervalTiming;
    protected $_name = [
        'planTemplateId' => 'PlanTemplateId',
        'appTemplateId'  => 'AppTemplateId',
        'appVersion'     => 'AppVersion',
        'triggerEnum'    => 'TriggerEnum',
        'description'    => 'Description',
        'intervalTiming' => 'IntervalTiming',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->planTemplateId) {
            $res['PlanTemplateId'] = $this->planTemplateId;
        }
        if (null !== $this->appTemplateId) {
            $res['AppTemplateId'] = $this->appTemplateId;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->triggerEnum) {
            $res['TriggerEnum'] = $this->triggerEnum;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->intervalTiming) {
            $res['IntervalTiming'] = $this->intervalTiming;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlanTemplateId'])) {
            $model->planTemplateId = $map['PlanTemplateId'];
        }
        if (isset($map['AppTemplateId'])) {
            $model->appTemplateId = $map['AppTemplateId'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['TriggerEnum'])) {
            $model->triggerEnum = $map['TriggerEnum'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IntervalTiming'])) {
            $model->intervalTiming = $map['IntervalTiming'];
        }

        return $model;
    }
}

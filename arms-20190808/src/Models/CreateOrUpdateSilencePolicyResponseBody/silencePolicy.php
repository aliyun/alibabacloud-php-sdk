<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateSilencePolicyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateSilencePolicyResponseBody\silencePolicy\matchingRules;

class silencePolicy extends Model
{
    /**
     * @var string
     */
    public $effectiveTimeType;
    /**
     * @var int
     */
    public $id;
    /**
     * @var matchingRules[]
     */
    public $matchingRules;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $state;
    /**
     * @var string
     */
    public $timePeriod;
    /**
     * @var string
     */
    public $timeSlots;
    protected $_name = [
        'effectiveTimeType' => 'EffectiveTimeType',
        'id'                => 'Id',
        'matchingRules'     => 'MatchingRules',
        'name'              => 'Name',
        'state'             => 'State',
        'timePeriod'        => 'TimePeriod',
        'timeSlots'         => 'TimeSlots',
    ];

    public function validate()
    {
        if (\is_array($this->matchingRules)) {
            Model::validateArray($this->matchingRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->effectiveTimeType) {
            $res['EffectiveTimeType'] = $this->effectiveTimeType;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->matchingRules) {
            if (\is_array($this->matchingRules)) {
                $res['MatchingRules'] = [];
                $n1                   = 0;
                foreach ($this->matchingRules as $item1) {
                    $res['MatchingRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->timePeriod) {
            $res['TimePeriod'] = $this->timePeriod;
        }

        if (null !== $this->timeSlots) {
            $res['TimeSlots'] = $this->timeSlots;
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
        if (isset($map['EffectiveTimeType'])) {
            $model->effectiveTimeType = $map['EffectiveTimeType'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MatchingRules'])) {
            if (!empty($map['MatchingRules'])) {
                $model->matchingRules = [];
                $n1                   = 0;
                foreach ($map['MatchingRules'] as $item1) {
                    $model->matchingRules[$n1++] = matchingRules::fromMap($item1);
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['TimePeriod'])) {
            $model->timePeriod = $map['TimePeriod'];
        }

        if (isset($map['TimeSlots'])) {
            $model->timeSlots = $map['TimeSlots'];
        }

        return $model;
    }
}

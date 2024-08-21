<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateSilencePolicyResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateSilencePolicyResponseBody\silencePolicy\matchingRules;
use AlibabaCloud\Tea\Model;

class silencePolicy extends Model
{
    /**
     * @var string
     */
    public $effectiveTimeType;

    /**
     * @description The ID of the silence policy.
     *
     * @example 1234
     *
     * @var int
     */
    public $id;

    /**
     * @description A list of matching rules.
     *
     * @var matchingRules[]
     */
    public $matchingRules;

    /**
     * @description The name of the silence policy.
     *
     * @example silencepolicy_test
     *
     * @var string
     */
    public $name;

    /**
     * @description Specifies whether to enable the silence policy. Valid values: enable and disable.
     *
     * @example enable
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->effectiveTimeType) {
            $res['EffectiveTimeType'] = $this->effectiveTimeType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->matchingRules) {
            $res['MatchingRules'] = [];
            if (null !== $this->matchingRules && \is_array($this->matchingRules)) {
                $n = 0;
                foreach ($this->matchingRules as $item) {
                    $res['MatchingRules'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return silencePolicy
     */
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
                $n                    = 0;
                foreach ($map['MatchingRules'] as $item) {
                    $model->matchingRules[$n++] = null !== $item ? matchingRules::fromMap($item) : $item;
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

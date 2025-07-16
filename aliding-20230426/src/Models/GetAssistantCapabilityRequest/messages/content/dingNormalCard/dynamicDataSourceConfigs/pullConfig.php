<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetAssistantCapabilityRequest\messages\content\dingNormalCard\dynamicDataSourceConfigs;

use AlibabaCloud\Tea\Model;

class pullConfig extends Model
{
    /**
     * @example 3
     *
     * @var int
     */
    public $interval;

    /**
     * @example NONE
     *
     * @var string
     */
    public $pullStrategy;

    /**
     * @example SECONDS
     *
     * @var string
     */
    public $timeUnit;
    protected $_name = [
        'interval' => 'interval',
        'pullStrategy' => 'pullStrategy',
        'timeUnit' => 'timeUnit',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->interval) {
            $res['interval'] = $this->interval;
        }
        if (null !== $this->pullStrategy) {
            $res['pullStrategy'] = $this->pullStrategy;
        }
        if (null !== $this->timeUnit) {
            $res['timeUnit'] = $this->timeUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pullConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['interval'])) {
            $model->interval = $map['interval'];
        }
        if (isset($map['pullStrategy'])) {
            $model->pullStrategy = $map['pullStrategy'];
        }
        if (isset($map['timeUnit'])) {
            $model->timeUnit = $map['timeUnit'];
        }

        return $model;
    }
}

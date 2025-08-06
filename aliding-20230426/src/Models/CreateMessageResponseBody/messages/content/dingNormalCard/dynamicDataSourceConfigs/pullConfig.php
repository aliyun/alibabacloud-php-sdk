<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageResponseBody\messages\content\dingNormalCard\dynamicDataSourceConfigs;

use AlibabaCloud\Dara\Model;

class pullConfig extends Model
{
    /**
     * @var int
     */
    public $interval;

    /**
     * @var string
     */
    public $pullStrategy;

    /**
     * @var string
     */
    public $timeUnit;
    protected $_name = [
        'interval' => 'interval',
        'pullStrategy' => 'pullStrategy',
        'timeUnit' => 'timeUnit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

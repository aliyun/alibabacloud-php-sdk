<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\StartDIJobRequest\realtimeStartSettings;

use AlibabaCloud\Tea\Model;

class failoverSettings extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $interval;

    /**
     * @example 30
     *
     * @var int
     */
    public $upperLimit;
    protected $_name = [
        'interval'   => 'Interval',
        'upperLimit' => 'UpperLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->upperLimit) {
            $res['UpperLimit'] = $this->upperLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failoverSettings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['UpperLimit'])) {
            $model->upperLimit = $map['UpperLimit'];
        }

        return $model;
    }
}

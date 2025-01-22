<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\StartDIJobRequest\realtimeStartSettings;

use AlibabaCloud\Dara\Model;

class failoverSettings extends Model
{
    /**
     * @var int
     */
    public $interval;
    /**
     * @var int
     */
    public $upperLimit;
    protected $_name = [
        'interval'   => 'Interval',
        'upperLimit' => 'UpperLimit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

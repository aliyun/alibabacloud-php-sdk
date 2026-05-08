<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetPipelineResponseBody\executePolicy;

use AlibabaCloud\Dara\Model;

class scheduled extends Model
{
    /**
     * @var int
     */
    public $fromTime;

    /**
     * @var string
     */
    public $interval;
    protected $_name = [
        'fromTime' => 'fromTime',
        'interval' => 'interval',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fromTime) {
            $res['fromTime'] = $this->fromTime;
        }

        if (null !== $this->interval) {
            $res['interval'] = $this->interval;
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
        if (isset($map['fromTime'])) {
            $model->fromTime = $map['fromTime'];
        }

        if (isset($map['interval'])) {
            $model->interval = $map['interval'];
        }

        return $model;
    }
}

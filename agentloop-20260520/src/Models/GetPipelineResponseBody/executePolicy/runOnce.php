<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\GetPipelineResponseBody\executePolicy;

use AlibabaCloud\Dara\Model;

class runOnce extends Model
{
    /**
     * @var int
     */
    public $fromTime;

    /**
     * @var int
     */
    public $toTime;
    protected $_name = [
        'fromTime' => 'fromTime',
        'toTime' => 'toTime',
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

        if (null !== $this->toTime) {
            $res['toTime'] = $this->toTime;
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

        if (isset($map['toTime'])) {
            $model->toTime = $map['toTime'];
        }

        return $model;
    }
}

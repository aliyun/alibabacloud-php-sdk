<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class BackfillStrategy extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var bool
     */
    public $immediate;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'enabled' => 'enabled',
        'endTime' => 'endTime',
        'immediate' => 'immediate',
        'startTime' => 'startTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->immediate) {
            $res['immediate'] = $this->immediate;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
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
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['immediate'])) {
            $model->immediate = $map['immediate'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}

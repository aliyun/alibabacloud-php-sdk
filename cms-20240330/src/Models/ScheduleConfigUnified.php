<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ScheduleConfigUnified extends Model
{
    /**
     * @var int
     */
    public $intervalSecs;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'intervalSecs' => 'intervalSecs',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->intervalSecs) {
            $res['intervalSecs'] = $this->intervalSecs;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['intervalSecs'])) {
            $model->intervalSecs = $map['intervalSecs'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

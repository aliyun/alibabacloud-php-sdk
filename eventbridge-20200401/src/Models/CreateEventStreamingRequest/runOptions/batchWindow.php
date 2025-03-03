<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\runOptions;

use AlibabaCloud\Dara\Model;

class batchWindow extends Model
{
    /**
     * @var int
     */
    public $countBasedWindow;
    /**
     * @var int
     */
    public $timeBasedWindow;
    protected $_name = [
        'countBasedWindow' => 'CountBasedWindow',
        'timeBasedWindow'  => 'TimeBasedWindow',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->countBasedWindow) {
            $res['CountBasedWindow'] = $this->countBasedWindow;
        }

        if (null !== $this->timeBasedWindow) {
            $res['TimeBasedWindow'] = $this->timeBasedWindow;
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
        if (isset($map['CountBasedWindow'])) {
            $model->countBasedWindow = $map['CountBasedWindow'];
        }

        if (isset($map['TimeBasedWindow'])) {
            $model->timeBasedWindow = $map['TimeBasedWindow'];
        }

        return $model;
    }
}

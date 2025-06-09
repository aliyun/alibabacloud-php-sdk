<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class Histogram extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $from;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var int
     */
    public $to;
    protected $_name = [
        'count' => 'count',
        'from' => 'from',
        'progress' => 'progress',
        'to' => 'to',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }

        if (null !== $this->from) {
            $res['from'] = $this->from;
        }

        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }

        if (null !== $this->to) {
            $res['to'] = $this->to;
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
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        if (isset($map['from'])) {
            $model->from = $map['from'];
        }

        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }

        if (isset($map['to'])) {
            $model->to = $map['to'];
        }

        return $model;
    }
}

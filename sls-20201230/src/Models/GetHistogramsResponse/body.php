<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\GetHistogramsResponse;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @var int
     */
    public $from;

    /**
     * @var int
     */
    public $to;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $progress;
    protected $_name = [
        'from'     => 'from',
        'to'       => 'to',
        'count'    => 'count',
        'progress' => 'progress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['from'] = $this->from;
        }
        if (null !== $this->to) {
            $res['to'] = $this->to;
        }
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['from'])) {
            $model->from = $map['from'];
        }
        if (isset($map['to'])) {
            $model->to = $map['to'];
        }
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }

        return $model;
    }
}

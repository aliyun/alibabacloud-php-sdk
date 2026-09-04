<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLProgressBufferDetail extends Model
{
    /**
     * @var int
     */
    public $consumed;

    /**
     * @var int
     */
    public $finished;

    /**
     * @var int
     */
    public $ready;

    /**
     * @var int
     */
    public $tag;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'consumed' => 'Consumed',
        'finished' => 'Finished',
        'ready' => 'Ready',
        'tag' => 'Tag',
        'total' => 'Total',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumed) {
            $res['Consumed'] = $this->consumed;
        }

        if (null !== $this->finished) {
            $res['Finished'] = $this->finished;
        }

        if (null !== $this->ready) {
            $res['Ready'] = $this->ready;
        }

        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['Consumed'])) {
            $model->consumed = $map['Consumed'];
        }

        if (isset($map['Finished'])) {
            $model->finished = $map['Finished'];
        }

        if (isset($map['Ready'])) {
            $model->ready = $map['Ready'];
        }

        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}

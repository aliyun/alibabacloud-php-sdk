<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\GetSqlConversionProgressResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $fail;

    /**
     * @var int
     */
    public $finish;

    /**
     * @var float
     */
    public $percent;

    /**
     * @var int
     */
    public $running;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'fail' => 'fail',
        'finish' => 'finish',
        'percent' => 'percent',
        'running' => 'running',
        'total' => 'total',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fail) {
            $res['fail'] = $this->fail;
        }

        if (null !== $this->finish) {
            $res['finish'] = $this->finish;
        }

        if (null !== $this->percent) {
            $res['percent'] = $this->percent;
        }

        if (null !== $this->running) {
            $res['running'] = $this->running;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
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
        if (isset($map['fail'])) {
            $model->fail = $map['fail'];
        }

        if (isset($map['finish'])) {
            $model->finish = $map['finish'];
        }

        if (isset($map['percent'])) {
            $model->percent = $map['percent'];
        }

        if (isset($map['running'])) {
            $model->running = $map['running'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}

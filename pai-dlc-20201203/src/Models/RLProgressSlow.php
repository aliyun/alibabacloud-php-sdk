<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLProgressSlow extends Model
{
    /**
     * @var RLProgressSlowDetail[]
     */
    public $details;

    /**
     * @var float
     */
    public $elapsed;

    /**
     * @var int
     */
    public $time;
    protected $_name = [
        'details' => 'Details',
        'elapsed' => 'Elapsed',
        'time' => 'Time',
    ];

    public function validate()
    {
        if (\is_array($this->details)) {
            Model::validateArray($this->details);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->details) {
            if (\is_array($this->details)) {
                $res['Details'] = [];
                $n1 = 0;
                foreach ($this->details as $item1) {
                    $res['Details'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->elapsed) {
            $res['Elapsed'] = $this->elapsed;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n1 = 0;
                foreach ($map['Details'] as $item1) {
                    $model->details[$n1] = RLProgressSlowDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Elapsed'])) {
            $model->elapsed = $map['Elapsed'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}

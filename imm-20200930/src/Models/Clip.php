<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class Clip extends Model
{
    /**
     * @var int[]
     */
    public $timeRange;
    protected $_name = [
        'timeRange' => 'TimeRange',
    ];

    public function validate()
    {
        if (\is_array($this->timeRange)) {
            Model::validateArray($this->timeRange);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->timeRange) {
            if (\is_array($this->timeRange)) {
                $res['TimeRange'] = [];
                $n1 = 0;
                foreach ($this->timeRange as $item1) {
                    $res['TimeRange'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['TimeRange'])) {
            if (!empty($map['TimeRange'])) {
                $model->timeRange = [];
                $n1 = 0;
                foreach ($map['TimeRange'] as $item1) {
                    $model->timeRange[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

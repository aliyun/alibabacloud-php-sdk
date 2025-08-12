<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList;

use AlibabaCloud\Dara\Model;

class escalation extends Model
{
    /**
     * @var string
     */
    public $expression;

    /**
     * @var string
     */
    public $level;

    /**
     * @var int
     */
    public $times;
    protected $_name = [
        'expression' => 'Expression',
        'level' => 'Level',
        'times' => 'Times',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expression) {
            $res['Expression'] = $this->expression;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->times) {
            $res['Times'] = $this->times;
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
        if (isset($map['Expression'])) {
            $model->expression = $map['Expression'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['Times'])) {
            $model->times = $map['Times'];
        }

        return $model;
    }
}

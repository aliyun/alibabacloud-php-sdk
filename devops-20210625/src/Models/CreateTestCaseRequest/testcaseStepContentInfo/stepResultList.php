<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateTestCaseRequest\testcaseStepContentInfo;

use AlibabaCloud\Dara\Model;

class stepResultList extends Model
{
    /**
     * @var string
     */
    public $expected;
    /**
     * @var string
     */
    public $step;
    protected $_name = [
        'expected' => 'expected',
        'step'     => 'step',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expected) {
            $res['expected'] = $this->expected;
        }

        if (null !== $this->step) {
            $res['step'] = $this->step;
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
        if (isset($map['expected'])) {
            $model->expected = $map['expected'];
        }

        if (isset($map['step'])) {
            $model->step = $map['step'];
        }

        return $model;
    }
}

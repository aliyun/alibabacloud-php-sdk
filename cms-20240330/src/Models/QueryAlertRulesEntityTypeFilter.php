<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class QueryAlertRulesEntityTypeFilter extends Model
{
    /**
     * @var string[]
     */
    public $in;

    /**
     * @var string[]
     */
    public $notIn;
    protected $_name = [
        'in' => 'in',
        'notIn' => 'notIn',
    ];

    public function validate()
    {
        if (\is_array($this->in)) {
            Model::validateArray($this->in);
        }
        if (\is_array($this->notIn)) {
            Model::validateArray($this->notIn);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->in) {
            if (\is_array($this->in)) {
                $res['in'] = [];
                $n1 = 0;
                foreach ($this->in as $item1) {
                    $res['in'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->notIn) {
            if (\is_array($this->notIn)) {
                $res['notIn'] = [];
                $n1 = 0;
                foreach ($this->notIn as $item1) {
                    $res['notIn'][$n1] = $item1;
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
        if (isset($map['in'])) {
            if (!empty($map['in'])) {
                $model->in = [];
                $n1 = 0;
                foreach ($map['in'] as $item1) {
                    $model->in[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['notIn'])) {
            if (!empty($map['notIn'])) {
                $model->notIn = [];
                $n1 = 0;
                foreach ($map['notIn'] as $item1) {
                    $model->notIn[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

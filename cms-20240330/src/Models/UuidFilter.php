<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class UuidFilter extends Model
{
    /**
     * @var string
     */
    public $eq;

    /**
     * @var string[]
     */
    public $in;
    protected $_name = [
        'eq' => 'eq',
        'in' => 'in',
    ];

    public function validate()
    {
        if (\is_array($this->in)) {
            Model::validateArray($this->in);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eq) {
            $res['eq'] = $this->eq;
        }

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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['eq'])) {
            $model->eq = $map['eq'];
        }

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

        return $model;
    }
}

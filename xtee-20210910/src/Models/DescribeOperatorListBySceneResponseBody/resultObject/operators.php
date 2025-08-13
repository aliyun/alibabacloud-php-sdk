<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeOperatorListBySceneResponseBody\resultObject;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeOperatorListBySceneResponseBody\resultObject\operators\rightVariables;

class operators extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $hasRightVariable;

    /**
     * @var string
     */
    public $memo;

    /**
     * @var string
     */
    public $name;

    /**
     * @var rightVariables[]
     */
    public $rightVariables;
    protected $_name = [
        'code' => 'code',
        'hasRightVariable' => 'hasRightVariable',
        'memo' => 'memo',
        'name' => 'name',
        'rightVariables' => 'rightVariables',
    ];

    public function validate()
    {
        if (\is_array($this->rightVariables)) {
            Model::validateArray($this->rightVariables);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->hasRightVariable) {
            $res['hasRightVariable'] = $this->hasRightVariable;
        }

        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->rightVariables) {
            if (\is_array($this->rightVariables)) {
                $res['rightVariables'] = [];
                $n1 = 0;
                foreach ($this->rightVariables as $item1) {
                    $res['rightVariables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['hasRightVariable'])) {
            $model->hasRightVariable = $map['hasRightVariable'];
        }

        if (isset($map['memo'])) {
            $model->memo = $map['memo'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['rightVariables'])) {
            if (!empty($map['rightVariables'])) {
                $model->rightVariables = [];
                $n1 = 0;
                foreach ($map['rightVariables'] as $item1) {
                    $model->rightVariables[$n1] = rightVariables::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

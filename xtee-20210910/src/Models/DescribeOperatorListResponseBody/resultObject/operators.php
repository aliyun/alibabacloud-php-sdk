<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeOperatorListResponseBody\resultObject;

use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeOperatorListResponseBody\resultObject\operators\rightVariables;
use AlibabaCloud\Tea\Model;

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
        'code'             => 'code',
        'hasRightVariable' => 'hasRightVariable',
        'memo'             => 'memo',
        'name'             => 'name',
        'rightVariables'   => 'rightVariables',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['rightVariables'] = [];
            if (null !== $this->rightVariables && \is_array($this->rightVariables)) {
                $n = 0;
                foreach ($this->rightVariables as $item) {
                    $res['rightVariables'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operators
     */
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
                $n                     = 0;
                foreach ($map['rightVariables'] as $item) {
                    $model->rightVariables[$n++] = null !== $item ? rightVariables::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

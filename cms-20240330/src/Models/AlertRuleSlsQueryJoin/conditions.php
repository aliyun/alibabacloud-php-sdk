<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AlertRuleSlsQueryJoin;

use AlibabaCloud\Tea\Model;

class conditions extends Model
{
    /**
     * @description 条件的左操作参数，格式为$<query_idx>.<结果集字段名>
     *
     * @var string
     */
    public $firstField;

    /**
     * @description <, >, ==, !=, <=, >=
     *
     * @var string
     */
    public $oper;

    /**
     * @description 条件的右操作参数，格式为$<query_idx>.<结果集字段名>
     *
     * @var string
     */
    public $secondField;
    protected $_name = [
        'firstField' => 'firstField',
        'oper' => 'oper',
        'secondField' => 'secondField',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->firstField) {
            $res['firstField'] = $this->firstField;
        }
        if (null !== $this->oper) {
            $res['oper'] = $this->oper;
        }
        if (null !== $this->secondField) {
            $res['secondField'] = $this->secondField;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['firstField'])) {
            $model->firstField = $map['firstField'];
        }
        if (isset($map['oper'])) {
            $model->oper = $map['oper'];
        }
        if (isset($map['secondField'])) {
            $model->secondField = $map['secondField'];
        }

        return $model;
    }
}

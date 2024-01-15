<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\checkRange;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators;
use AlibabaCloud\Tea\Model;

class conditions extends Model
{
    /**
     * @description 检测范围
     *
     * @var checkRange
     */
    public $checkRange;

    /**
     * @description 条件id，可能是db中的主键，也可能是转换成的a, b, c
     *
     * @var string
     */
    public $cid;

    /**
     * @description 排除
     *
     * @var int
     */
    public $exclusion;

    /**
     * @description 在db中的主键
     *
     * @var int
     */
    public $id;

    /**
     * @description Lambda表达式：例如:a&&b
     *
     * @var string
     */
    public $lambda;

    /**
     * @description 算子列表
     *
     * @var operators
     */
    public $operators;

    /**
     * @description 条件所属的规则id
     *
     * @var string
     */
    public $rid;
    protected $_name = [
        'checkRange' => 'Check_range',
        'cid'        => 'Cid',
        'exclusion'  => 'Exclusion',
        'id'         => 'Id',
        'lambda'     => 'Lambda',
        'operators'  => 'Operators',
        'rid'        => 'Rid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkRange) {
            $res['Check_range'] = null !== $this->checkRange ? $this->checkRange->toMap() : null;
        }
        if (null !== $this->cid) {
            $res['Cid'] = $this->cid;
        }
        if (null !== $this->exclusion) {
            $res['Exclusion'] = $this->exclusion;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->lambda) {
            $res['Lambda'] = $this->lambda;
        }
        if (null !== $this->operators) {
            $res['Operators'] = null !== $this->operators ? $this->operators->toMap() : null;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
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
        if (isset($map['Check_range'])) {
            $model->checkRange = checkRange::fromMap($map['Check_range']);
        }
        if (isset($map['Cid'])) {
            $model->cid = $map['Cid'];
        }
        if (isset($map['Exclusion'])) {
            $model->exclusion = $map['Exclusion'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Lambda'])) {
            $model->lambda = $map['Lambda'];
        }
        if (isset($map['Operators'])) {
            $model->operators = operators::fromMap($map['Operators']);
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }

        return $model;
    }
}

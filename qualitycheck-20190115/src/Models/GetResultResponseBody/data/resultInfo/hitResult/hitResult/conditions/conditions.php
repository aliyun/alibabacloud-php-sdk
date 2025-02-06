<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\checkRange;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\operators;

class conditions extends Model
{
    /**
     * @var checkRange
     */
    public $checkRange;
    /**
     * @var string
     */
    public $cid;
    /**
     * @var int
     */
    public $exclusion;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $lambda;
    /**
     * @var operators
     */
    public $operators;
    /**
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
        if (null !== $this->checkRange) {
            $this->checkRange->validate();
        }
        if (null !== $this->operators) {
            $this->operators->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkRange) {
            $res['Check_range'] = null !== $this->checkRange ? $this->checkRange->toArray($noStream) : $this->checkRange;
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
            $res['Operators'] = null !== $this->operators ? $this->operators->toArray($noStream) : $this->operators;
        }

        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
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

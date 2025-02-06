<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConditionBasicInfo\checkRange;

class ConditionBasicInfo extends Model
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
     * @var string
     */
    public $name;
    /**
     * @var OperatorBasicInfo[]
     */
    public $operators;
    /**
     * @var string
     */
    public $rid;
    /**
     * @var string
     */
    public $userGroup;
    protected $_name = [
        'checkRange' => 'Check_range',
        'cid'        => 'Cid',
        'exclusion'  => 'Exclusion',
        'id'         => 'Id',
        'lambda'     => 'Lambda',
        'name'       => 'Name',
        'operators'  => 'Operators',
        'rid'        => 'Rid',
        'userGroup'  => 'UserGroup',
    ];

    public function validate()
    {
        if (null !== $this->checkRange) {
            $this->checkRange->validate();
        }
        if (\is_array($this->operators)) {
            Model::validateArray($this->operators);
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

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->operators) {
            if (\is_array($this->operators)) {
                $res['Operators'] = [];
                $n1               = 0;
                foreach ($this->operators as $item1) {
                    $res['Operators'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }

        if (null !== $this->userGroup) {
            $res['UserGroup'] = $this->userGroup;
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

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Operators'])) {
            if (!empty($map['Operators'])) {
                $model->operators = [];
                $n1               = 0;
                foreach ($map['Operators'] as $item1) {
                    $model->operators[$n1++] = OperatorBasicInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }

        if (isset($map['UserGroup'])) {
            $model->userGroup = $map['UserGroup'];
        }

        return $model;
    }
}

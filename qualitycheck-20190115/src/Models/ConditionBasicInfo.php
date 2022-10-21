<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ConditionBasicInfo\checkRange;
use AlibabaCloud\Tea\Model;

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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operators) {
            $res['Operators'] = [];
            if (null !== $this->operators && \is_array($this->operators)) {
                $n = 0;
                foreach ($this->operators as $item) {
                    $res['Operators'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ConditionBasicInfo
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Operators'])) {
            if (!empty($map['Operators'])) {
                $model->operators = [];
                $n                = 0;
                foreach ($map['Operators'] as $item) {
                    $model->operators[$n++] = null !== $item ? OperatorBasicInfo::fromMap($item) : $item;
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

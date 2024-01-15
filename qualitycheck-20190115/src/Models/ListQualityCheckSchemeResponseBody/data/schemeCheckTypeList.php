<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListQualityCheckSchemeResponseBody\data;

use AlibabaCloud\Tea\Model;

class schemeCheckTypeList extends Model
{
    /**
     * @var string
     */
    public $checkName;

    /**
     * @example 1
     *
     * @var int
     */
    public $checkType;

    /**
     * @example 1
     *
     * @var int
     */
    public $enable;

    /**
     * @example 20
     *
     * @var int
     */
    public $score;

    /**
     * @example 10
     *
     * @var int
     */
    public $targetType;
    protected $_name = [
        'checkName'  => 'CheckName',
        'checkType'  => 'CheckType',
        'enable'     => 'Enable',
        'score'      => 'Score',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkName) {
            $res['CheckName'] = $this->checkName;
        }
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schemeCheckTypeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckName'])) {
            $model->checkName = $map['CheckName'];
        }
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}

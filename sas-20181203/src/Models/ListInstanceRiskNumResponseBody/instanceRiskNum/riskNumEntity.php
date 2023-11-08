<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListInstanceRiskNumResponseBody\instanceRiskNum;

use AlibabaCloud\Tea\Model;

class riskNumEntity extends Model
{
    /**
     * @example 5
     *
     * @var int
     */
    public $suspiciousHighCount;

    /**
     * @example 7
     *
     * @var int
     */
    public $suspiciousLowCount;

    /**
     * @example 6
     *
     * @var int
     */
    public $suspiciousMediumCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $vulHighCount;

    /**
     * @example 3
     *
     * @var int
     */
    public $vulLowCount;

    /**
     * @example 2
     *
     * @var int
     */
    public $vulMediumCount;

    /**
     * @example 4
     *
     * @var int
     */
    public $weakPassWordCount;
    protected $_name = [
        'suspiciousHighCount'   => 'SuspiciousHighCount',
        'suspiciousLowCount'    => 'SuspiciousLowCount',
        'suspiciousMediumCount' => 'SuspiciousMediumCount',
        'vulHighCount'          => 'VulHighCount',
        'vulLowCount'           => 'VulLowCount',
        'vulMediumCount'        => 'VulMediumCount',
        'weakPassWordCount'     => 'WeakPassWordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->suspiciousHighCount) {
            $res['SuspiciousHighCount'] = $this->suspiciousHighCount;
        }
        if (null !== $this->suspiciousLowCount) {
            $res['SuspiciousLowCount'] = $this->suspiciousLowCount;
        }
        if (null !== $this->suspiciousMediumCount) {
            $res['SuspiciousMediumCount'] = $this->suspiciousMediumCount;
        }
        if (null !== $this->vulHighCount) {
            $res['VulHighCount'] = $this->vulHighCount;
        }
        if (null !== $this->vulLowCount) {
            $res['VulLowCount'] = $this->vulLowCount;
        }
        if (null !== $this->vulMediumCount) {
            $res['VulMediumCount'] = $this->vulMediumCount;
        }
        if (null !== $this->weakPassWordCount) {
            $res['WeakPassWordCount'] = $this->weakPassWordCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return riskNumEntity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SuspiciousHighCount'])) {
            $model->suspiciousHighCount = $map['SuspiciousHighCount'];
        }
        if (isset($map['SuspiciousLowCount'])) {
            $model->suspiciousLowCount = $map['SuspiciousLowCount'];
        }
        if (isset($map['SuspiciousMediumCount'])) {
            $model->suspiciousMediumCount = $map['SuspiciousMediumCount'];
        }
        if (isset($map['VulHighCount'])) {
            $model->vulHighCount = $map['VulHighCount'];
        }
        if (isset($map['VulLowCount'])) {
            $model->vulLowCount = $map['VulLowCount'];
        }
        if (isset($map['VulMediumCount'])) {
            $model->vulMediumCount = $map['VulMediumCount'];
        }
        if (isset($map['WeakPassWordCount'])) {
            $model->weakPassWordCount = $map['WeakPassWordCount'];
        }

        return $model;
    }
}

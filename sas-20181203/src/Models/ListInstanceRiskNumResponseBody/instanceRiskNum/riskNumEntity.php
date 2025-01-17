<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListInstanceRiskNumResponseBody\instanceRiskNum;

use AlibabaCloud\Dara\Model;

class riskNumEntity extends Model
{
    /**
     * @var int
     */
    public $suspiciousHighCount;
    /**
     * @var int
     */
    public $suspiciousLowCount;
    /**
     * @var int
     */
    public $suspiciousMediumCount;
    /**
     * @var int
     */
    public $vulHighCount;
    /**
     * @var int
     */
    public $vulLowCount;
    /**
     * @var int
     */
    public $vulMediumCount;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

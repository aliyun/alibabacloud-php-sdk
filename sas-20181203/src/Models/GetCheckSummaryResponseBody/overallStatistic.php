<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class overallStatistic extends Model
{
    /**
     * @description The number of unchecked check items.
     *
     * @example 3
     *
     * @var int
     */
    public $notCheckCount;

    /**
     * @description The number of unchecked high-risk check items.
     *
     * @example 1
     *
     * @var int
     */
    public $notCheckHighCount;

    /**
     * @description The number of unchecked low-risk check items.
     *
     * @example 1
     *
     * @var int
     */
    public $notCheckLowCount;

    /**
     * @description The number of unchecked medium-risk check items.
     *
     * @example 1
     *
     * @var int
     */
    public $notCheckMediumCount;

    /**
     * @description The number of check items that failed to pass the check.
     *
     * @example 3
     *
     * @var int
     */
    public $notPassCount;

    /**
     * @description The number of high-risk check items that failed to pass the check.
     *
     * @example 1
     *
     * @var int
     */
    public $notPassHighCount;

    /**
     * @description The number of low-risk check items that failed to pass the check.
     *
     * @example 1
     *
     * @var int
     */
    public $notPassLowCount;

    /**
     * @description The number of low-risk check items that failed to pass the check.
     *
     * @example 1
     *
     * @var int
     */
    public $notPassMediumCount;

    /**
     * @description The number of check items that passed the check.
     *
     * @example 3
     *
     * @var int
     */
    public $passCount;

    /**
     * @description The number off high-risk check items that passed the check.
     *
     * @example 1
     *
     * @var int
     */
    public $passHighCount;

    /**
     * @description The number off low-risk check items that passed the check.
     *
     * @example 1
     *
     * @var int
     */
    public $passLowCount;

    /**
     * @description The number off medium-risk check items that passed the check.
     *
     * @example 1
     *
     * @var int
     */
    public $passMediumCount;
    protected $_name = [
        'notCheckCount'       => 'NotCheckCount',
        'notCheckHighCount'   => 'NotCheckHighCount',
        'notCheckLowCount'    => 'NotCheckLowCount',
        'notCheckMediumCount' => 'NotCheckMediumCount',
        'notPassCount'        => 'NotPassCount',
        'notPassHighCount'    => 'NotPassHighCount',
        'notPassLowCount'     => 'NotPassLowCount',
        'notPassMediumCount'  => 'NotPassMediumCount',
        'passCount'           => 'PassCount',
        'passHighCount'       => 'PassHighCount',
        'passLowCount'        => 'PassLowCount',
        'passMediumCount'     => 'PassMediumCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notCheckCount) {
            $res['NotCheckCount'] = $this->notCheckCount;
        }
        if (null !== $this->notCheckHighCount) {
            $res['NotCheckHighCount'] = $this->notCheckHighCount;
        }
        if (null !== $this->notCheckLowCount) {
            $res['NotCheckLowCount'] = $this->notCheckLowCount;
        }
        if (null !== $this->notCheckMediumCount) {
            $res['NotCheckMediumCount'] = $this->notCheckMediumCount;
        }
        if (null !== $this->notPassCount) {
            $res['NotPassCount'] = $this->notPassCount;
        }
        if (null !== $this->notPassHighCount) {
            $res['NotPassHighCount'] = $this->notPassHighCount;
        }
        if (null !== $this->notPassLowCount) {
            $res['NotPassLowCount'] = $this->notPassLowCount;
        }
        if (null !== $this->notPassMediumCount) {
            $res['NotPassMediumCount'] = $this->notPassMediumCount;
        }
        if (null !== $this->passCount) {
            $res['PassCount'] = $this->passCount;
        }
        if (null !== $this->passHighCount) {
            $res['PassHighCount'] = $this->passHighCount;
        }
        if (null !== $this->passLowCount) {
            $res['PassLowCount'] = $this->passLowCount;
        }
        if (null !== $this->passMediumCount) {
            $res['PassMediumCount'] = $this->passMediumCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return overallStatistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotCheckCount'])) {
            $model->notCheckCount = $map['NotCheckCount'];
        }
        if (isset($map['NotCheckHighCount'])) {
            $model->notCheckHighCount = $map['NotCheckHighCount'];
        }
        if (isset($map['NotCheckLowCount'])) {
            $model->notCheckLowCount = $map['NotCheckLowCount'];
        }
        if (isset($map['NotCheckMediumCount'])) {
            $model->notCheckMediumCount = $map['NotCheckMediumCount'];
        }
        if (isset($map['NotPassCount'])) {
            $model->notPassCount = $map['NotPassCount'];
        }
        if (isset($map['NotPassHighCount'])) {
            $model->notPassHighCount = $map['NotPassHighCount'];
        }
        if (isset($map['NotPassLowCount'])) {
            $model->notPassLowCount = $map['NotPassLowCount'];
        }
        if (isset($map['NotPassMediumCount'])) {
            $model->notPassMediumCount = $map['NotPassMediumCount'];
        }
        if (isset($map['PassCount'])) {
            $model->passCount = $map['PassCount'];
        }
        if (isset($map['PassHighCount'])) {
            $model->passHighCount = $map['PassHighCount'];
        }
        if (isset($map['PassLowCount'])) {
            $model->passLowCount = $map['PassLowCount'];
        }
        if (isset($map['PassMediumCount'])) {
            $model->passMediumCount = $map['PassMediumCount'];
        }

        return $model;
    }
}

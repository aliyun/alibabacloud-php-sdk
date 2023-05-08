<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckSummaryResponseBody\summarys;

use AlibabaCloud\Tea\Model;

class standards extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $failCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @example 1
     *
     * @var int
     */
    public $passCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $riskLevelHighCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $riskLevelLowCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $riskLevelMediumCount;

    /**
     * @var string
     */
    public $showName;
    protected $_name = [
        'failCount'            => 'FailCount',
        'id'                   => 'Id',
        'passCount'            => 'PassCount',
        'riskLevelHighCount'   => 'RiskLevelHighCount',
        'riskLevelLowCount'    => 'RiskLevelLowCount',
        'riskLevelMediumCount' => 'RiskLevelMediumCount',
        'showName'             => 'ShowName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->passCount) {
            $res['PassCount'] = $this->passCount;
        }
        if (null !== $this->riskLevelHighCount) {
            $res['RiskLevelHighCount'] = $this->riskLevelHighCount;
        }
        if (null !== $this->riskLevelLowCount) {
            $res['RiskLevelLowCount'] = $this->riskLevelLowCount;
        }
        if (null !== $this->riskLevelMediumCount) {
            $res['RiskLevelMediumCount'] = $this->riskLevelMediumCount;
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return standards
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['PassCount'])) {
            $model->passCount = $map['PassCount'];
        }
        if (isset($map['RiskLevelHighCount'])) {
            $model->riskLevelHighCount = $map['RiskLevelHighCount'];
        }
        if (isset($map['RiskLevelLowCount'])) {
            $model->riskLevelLowCount = $map['RiskLevelLowCount'];
        }
        if (isset($map['RiskLevelMediumCount'])) {
            $model->riskLevelMediumCount = $map['RiskLevelMediumCount'];
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }

        return $model;
    }
}

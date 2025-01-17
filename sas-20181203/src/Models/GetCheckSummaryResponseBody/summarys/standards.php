<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckSummaryResponseBody\summarys;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckSummaryResponseBody\summarys\standards\standardStatistic;

class standards extends Model
{
    /**
     * @var int
     */
    public $failCount;
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $passCount;
    /**
     * @var int
     */
    public $riskLevelHighCount;
    /**
     * @var int
     */
    public $riskLevelLowCount;
    /**
     * @var int
     */
    public $riskLevelMediumCount;
    /**
     * @var string
     */
    public $showName;
    /**
     * @var standardStatistic
     */
    public $standardStatistic;
    protected $_name = [
        'failCount'            => 'FailCount',
        'id'                   => 'Id',
        'passCount'            => 'PassCount',
        'riskLevelHighCount'   => 'RiskLevelHighCount',
        'riskLevelLowCount'    => 'RiskLevelLowCount',
        'riskLevelMediumCount' => 'RiskLevelMediumCount',
        'showName'             => 'ShowName',
        'standardStatistic'    => 'StandardStatistic',
    ];

    public function validate()
    {
        if (null !== $this->standardStatistic) {
            $this->standardStatistic->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->standardStatistic) {
            $res['StandardStatistic'] = null !== $this->standardStatistic ? $this->standardStatistic->toArray($noStream) : $this->standardStatistic;
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

        if (isset($map['StandardStatistic'])) {
            $model->standardStatistic = standardStatistic::fromMap($map['StandardStatistic']);
        }

        return $model;
    }
}

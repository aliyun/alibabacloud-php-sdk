<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemWarningSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $advice;

    /**
     * @var string[]
     */
    public $affiliatedRiskTypes;

    /**
     * @var string[]
     */
    public $affiliatedRisks;

    /**
     * @var string
     */
    public $alias;

    /**
     * @var int
     */
    public $checkId;

    /**
     * @var string
     */
    public $checkItem;

    /**
     * @var string
     */
    public $checkLevel;

    /**
     * @var string
     */
    public $checkType;

    /**
     * @var bool
     */
    public $containerCheckItem;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $enableRisks;

    /**
     * @var string
     */
    public $riskType;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $warningMachineCount;
    protected $_name = [
        'advice' => 'Advice',
        'affiliatedRiskTypes' => 'AffiliatedRiskTypes',
        'affiliatedRisks' => 'AffiliatedRisks',
        'alias' => 'Alias',
        'checkId' => 'CheckId',
        'checkItem' => 'CheckItem',
        'checkLevel' => 'CheckLevel',
        'checkType' => 'CheckType',
        'containerCheckItem' => 'ContainerCheckItem',
        'description' => 'Description',
        'enableRisks' => 'EnableRisks',
        'riskType' => 'RiskType',
        'status' => 'Status',
        'warningMachineCount' => 'WarningMachineCount',
    ];

    public function validate()
    {
        if (\is_array($this->affiliatedRiskTypes)) {
            Model::validateArray($this->affiliatedRiskTypes);
        }
        if (\is_array($this->affiliatedRisks)) {
            Model::validateArray($this->affiliatedRisks);
        }
        if (\is_array($this->enableRisks)) {
            Model::validateArray($this->enableRisks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advice) {
            $res['Advice'] = $this->advice;
        }

        if (null !== $this->affiliatedRiskTypes) {
            if (\is_array($this->affiliatedRiskTypes)) {
                $res['AffiliatedRiskTypes'] = [];
                $n1 = 0;
                foreach ($this->affiliatedRiskTypes as $item1) {
                    $res['AffiliatedRiskTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->affiliatedRisks) {
            if (\is_array($this->affiliatedRisks)) {
                $res['AffiliatedRisks'] = [];
                $n1 = 0;
                foreach ($this->affiliatedRisks as $item1) {
                    $res['AffiliatedRisks'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }

        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->checkItem) {
            $res['CheckItem'] = $this->checkItem;
        }

        if (null !== $this->checkLevel) {
            $res['CheckLevel'] = $this->checkLevel;
        }

        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }

        if (null !== $this->containerCheckItem) {
            $res['ContainerCheckItem'] = $this->containerCheckItem;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enableRisks) {
            if (\is_array($this->enableRisks)) {
                $res['EnableRisks'] = [];
                $n1 = 0;
                foreach ($this->enableRisks as $item1) {
                    $res['EnableRisks'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->riskType) {
            $res['RiskType'] = $this->riskType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->warningMachineCount) {
            $res['WarningMachineCount'] = $this->warningMachineCount;
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
        if (isset($map['Advice'])) {
            $model->advice = $map['Advice'];
        }

        if (isset($map['AffiliatedRiskTypes'])) {
            if (!empty($map['AffiliatedRiskTypes'])) {
                $model->affiliatedRiskTypes = [];
                $n1 = 0;
                foreach ($map['AffiliatedRiskTypes'] as $item1) {
                    $model->affiliatedRiskTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AffiliatedRisks'])) {
            if (!empty($map['AffiliatedRisks'])) {
                $model->affiliatedRisks = [];
                $n1 = 0;
                foreach ($map['AffiliatedRisks'] as $item1) {
                    $model->affiliatedRisks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }

        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['CheckItem'])) {
            $model->checkItem = $map['CheckItem'];
        }

        if (isset($map['CheckLevel'])) {
            $model->checkLevel = $map['CheckLevel'];
        }

        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }

        if (isset($map['ContainerCheckItem'])) {
            $model->containerCheckItem = $map['ContainerCheckItem'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnableRisks'])) {
            if (!empty($map['EnableRisks'])) {
                $model->enableRisks = [];
                $n1 = 0;
                foreach ($map['EnableRisks'] as $item1) {
                    $model->enableRisks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RiskType'])) {
            $model->riskType = $map['RiskType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['WarningMachineCount'])) {
            $model->warningMachineCount = $map['WarningMachineCount'];
        }

        return $model;
    }
}

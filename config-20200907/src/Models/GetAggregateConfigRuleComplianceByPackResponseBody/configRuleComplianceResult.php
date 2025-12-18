<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleComplianceByPackResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateConfigRuleComplianceByPackResponseBody\configRuleComplianceResult\configRuleCompliances;

class configRuleComplianceResult extends Model
{
    /**
     * @var string
     */
    public $compliancePackId;

    /**
     * @var int
     */
    public $compliantCount;

    /**
     * @var configRuleCompliances[]
     */
    public $configRuleCompliances;

    /**
     * @var int
     */
    public $ignoredCount;

    /**
     * @var int
     */
    public $insufficientDataCount;

    /**
     * @var int
     */
    public $nonCompliantCount;

    /**
     * @var int
     */
    public $notApplicableCount;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'compliancePackId' => 'CompliancePackId',
        'compliantCount' => 'CompliantCount',
        'configRuleCompliances' => 'ConfigRuleCompliances',
        'ignoredCount' => 'IgnoredCount',
        'insufficientDataCount' => 'InsufficientDataCount',
        'nonCompliantCount' => 'NonCompliantCount',
        'notApplicableCount' => 'NotApplicableCount',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->configRuleCompliances)) {
            Model::validateArray($this->configRuleCompliances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compliancePackId) {
            $res['CompliancePackId'] = $this->compliancePackId;
        }

        if (null !== $this->compliantCount) {
            $res['CompliantCount'] = $this->compliantCount;
        }

        if (null !== $this->configRuleCompliances) {
            if (\is_array($this->configRuleCompliances)) {
                $res['ConfigRuleCompliances'] = [];
                $n1 = 0;
                foreach ($this->configRuleCompliances as $item1) {
                    $res['ConfigRuleCompliances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ignoredCount) {
            $res['IgnoredCount'] = $this->ignoredCount;
        }

        if (null !== $this->insufficientDataCount) {
            $res['InsufficientDataCount'] = $this->insufficientDataCount;
        }

        if (null !== $this->nonCompliantCount) {
            $res['NonCompliantCount'] = $this->nonCompliantCount;
        }

        if (null !== $this->notApplicableCount) {
            $res['NotApplicableCount'] = $this->notApplicableCount;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['CompliancePackId'])) {
            $model->compliancePackId = $map['CompliancePackId'];
        }

        if (isset($map['CompliantCount'])) {
            $model->compliantCount = $map['CompliantCount'];
        }

        if (isset($map['ConfigRuleCompliances'])) {
            if (!empty($map['ConfigRuleCompliances'])) {
                $model->configRuleCompliances = [];
                $n1 = 0;
                foreach ($map['ConfigRuleCompliances'] as $item1) {
                    $model->configRuleCompliances[$n1] = configRuleCompliances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IgnoredCount'])) {
            $model->ignoredCount = $map['IgnoredCount'];
        }

        if (isset($map['InsufficientDataCount'])) {
            $model->insufficientDataCount = $map['InsufficientDataCount'];
        }

        if (isset($map['NonCompliantCount'])) {
            $model->nonCompliantCount = $map['NonCompliantCount'];
        }

        if (isset($map['NotApplicableCount'])) {
            $model->notApplicableCount = $map['NotApplicableCount'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

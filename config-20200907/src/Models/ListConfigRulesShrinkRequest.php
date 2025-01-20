<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class ListConfigRulesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $compliancePackId;
    /**
     * @var string
     */
    public $complianceType;
    /**
     * @var string
     */
    public $configRuleName;
    /**
     * @var string
     */
    public $configRuleState;
    /**
     * @var string
     */
    public $keyword;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $resourceTypes;
    /**
     * @var int
     */
    public $riskLevel;
    /**
     * @var string
     */
    public $tagShrink;
    protected $_name = [
        'compliancePackId' => 'CompliancePackId',
        'complianceType'   => 'ComplianceType',
        'configRuleName'   => 'ConfigRuleName',
        'configRuleState'  => 'ConfigRuleState',
        'keyword'          => 'Keyword',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'resourceTypes'    => 'ResourceTypes',
        'riskLevel'        => 'RiskLevel',
        'tagShrink'        => 'Tag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compliancePackId) {
            $res['CompliancePackId'] = $this->compliancePackId;
        }

        if (null !== $this->complianceType) {
            $res['ComplianceType'] = $this->complianceType;
        }

        if (null !== $this->configRuleName) {
            $res['ConfigRuleName'] = $this->configRuleName;
        }

        if (null !== $this->configRuleState) {
            $res['ConfigRuleState'] = $this->configRuleState;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->resourceTypes) {
            $res['ResourceTypes'] = $this->resourceTypes;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->tagShrink) {
            $res['Tag'] = $this->tagShrink;
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

        if (isset($map['ComplianceType'])) {
            $model->complianceType = $map['ComplianceType'];
        }

        if (isset($map['ConfigRuleName'])) {
            $model->configRuleName = $map['ConfigRuleName'];
        }

        if (isset($map['ConfigRuleState'])) {
            $model->configRuleState = $map['ConfigRuleState'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ResourceTypes'])) {
            $model->resourceTypes = $map['ResourceTypes'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['Tag'])) {
            $model->tagShrink = $map['Tag'];
        }

        return $model;
    }
}

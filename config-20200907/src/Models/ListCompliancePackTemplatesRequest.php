<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class ListCompliancePackTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $compliancePackTemplateId;

    /**
     * @var string
     */
    public $filterType;

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
    public $ruleRiskLevel;
    protected $_name = [
        'compliancePackTemplateId' => 'CompliancePackTemplateId',
        'filterType' => 'FilterType',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'resourceTypes' => 'ResourceTypes',
        'ruleRiskLevel' => 'RuleRiskLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compliancePackTemplateId) {
            $res['CompliancePackTemplateId'] = $this->compliancePackTemplateId;
        }

        if (null !== $this->filterType) {
            $res['FilterType'] = $this->filterType;
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

        if (null !== $this->ruleRiskLevel) {
            $res['RuleRiskLevel'] = $this->ruleRiskLevel;
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
        if (isset($map['CompliancePackTemplateId'])) {
            $model->compliancePackTemplateId = $map['CompliancePackTemplateId'];
        }

        if (isset($map['FilterType'])) {
            $model->filterType = $map['FilterType'];
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

        if (isset($map['RuleRiskLevel'])) {
            $model->ruleRiskLevel = $map['RuleRiskLevel'];
        }

        return $model;
    }
}

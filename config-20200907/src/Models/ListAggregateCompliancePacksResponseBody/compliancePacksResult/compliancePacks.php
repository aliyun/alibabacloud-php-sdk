<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateCompliancePacksResponseBody\compliancePacksResult;

use AlibabaCloud\Dara\Model;

class compliancePacks extends Model
{
    /**
     * @var int
     */
    public $accountId;
    /**
     * @var string
     */
    public $aggregatorId;
    /**
     * @var string
     */
    public $compliancePackId;
    /**
     * @var string
     */
    public $compliancePackName;
    /**
     * @var string
     */
    public $compliancePackTemplateId;
    /**
     * @var int
     */
    public $createTimestamp;
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $riskLevel;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'accountId'                => 'AccountId',
        'aggregatorId'             => 'AggregatorId',
        'compliancePackId'         => 'CompliancePackId',
        'compliancePackName'       => 'CompliancePackName',
        'compliancePackTemplateId' => 'CompliancePackTemplateId',
        'createTimestamp'          => 'CreateTimestamp',
        'description'              => 'Description',
        'riskLevel'                => 'RiskLevel',
        'status'                   => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }

        if (null !== $this->compliancePackId) {
            $res['CompliancePackId'] = $this->compliancePackId;
        }

        if (null !== $this->compliancePackName) {
            $res['CompliancePackName'] = $this->compliancePackName;
        }

        if (null !== $this->compliancePackTemplateId) {
            $res['CompliancePackTemplateId'] = $this->compliancePackTemplateId;
        }

        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }

        if (isset($map['CompliancePackId'])) {
            $model->compliancePackId = $map['CompliancePackId'];
        }

        if (isset($map['CompliancePackName'])) {
            $model->compliancePackName = $map['CompliancePackName'];
        }

        if (isset($map['CompliancePackTemplateId'])) {
            $model->compliancePackTemplateId = $map['CompliancePackTemplateId'];
        }

        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class UpdateScanResultFeedbackRequest extends Model
{
    /**
     * @var string
     */
    public $feedback;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $queryRequestId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $riskLevel;
    protected $_name = [
        'feedback' => 'Feedback',
        'labels' => 'Labels',
        'queryRequestId' => 'QueryRequestId',
        'regionId' => 'RegionId',
        'resourceType' => 'ResourceType',
        'riskLevel' => 'RiskLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
        }

        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }

        if (null !== $this->queryRequestId) {
            $res['QueryRequestId'] = $this->queryRequestId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
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
        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }

        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }

        if (isset($map['QueryRequestId'])) {
            $model->queryRequestId = $map['QueryRequestId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}

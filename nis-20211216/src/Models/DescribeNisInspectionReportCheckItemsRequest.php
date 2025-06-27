<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;

class DescribeNisInspectionReportCheckItemsRequest extends Model
{
    /**
     * @var string
     */
    public $categoryCode;

    /**
     * @var string
     */
    public $inspectionReportId;

    /**
     * @var string
     */
    public $language;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string[]
     */
    public $resourceType;

    /**
     * @var string[]
     */
    public $riskLevel;
    protected $_name = [
        'categoryCode' => 'CategoryCode',
        'inspectionReportId' => 'InspectionReportId',
        'language' => 'Language',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'resourceType' => 'ResourceType',
        'riskLevel' => 'RiskLevel',
    ];

    public function validate()
    {
        if (\is_array($this->resourceType)) {
            Model::validateArray($this->resourceType);
        }
        if (\is_array($this->riskLevel)) {
            Model::validateArray($this->riskLevel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryCode) {
            $res['CategoryCode'] = $this->categoryCode;
        }

        if (null !== $this->inspectionReportId) {
            $res['InspectionReportId'] = $this->inspectionReportId;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->resourceType) {
            if (\is_array($this->resourceType)) {
                $res['ResourceType'] = [];
                $n1 = 0;
                foreach ($this->resourceType as $item1) {
                    $res['ResourceType'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->riskLevel) {
            if (\is_array($this->riskLevel)) {
                $res['RiskLevel'] = [];
                $n1 = 0;
                foreach ($this->riskLevel as $item1) {
                    $res['RiskLevel'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CategoryCode'])) {
            $model->categoryCode = $map['CategoryCode'];
        }

        if (isset($map['InspectionReportId'])) {
            $model->inspectionReportId = $map['InspectionReportId'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ResourceType'])) {
            if (!empty($map['ResourceType'])) {
                $model->resourceType = [];
                $n1 = 0;
                foreach ($map['ResourceType'] as $item1) {
                    $model->resourceType[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RiskLevel'])) {
            if (!empty($map['RiskLevel'])) {
                $model->riskLevel = [];
                $n1 = 0;
                foreach ($map['RiskLevel'] as $item1) {
                    $model->riskLevel[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

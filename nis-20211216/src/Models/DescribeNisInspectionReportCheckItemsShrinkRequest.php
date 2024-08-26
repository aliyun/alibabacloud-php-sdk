<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Tea\Model;

class DescribeNisInspectionReportCheckItemsShrinkRequest extends Model
{
    /**
     * @example stability
     *
     * @var string
     */
    public $categoryCode;

    /**
     * @description This parameter is required.
     *
     * @example nir-ffd1af****196d0
     *
     * @var string
     */
    public $inspectionReportId;

    /**
     * @example zh-CN
     *
     * @var string
     */
    public $language;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example hKrS+MVXkuOgztXnvdml16/uO3mvCyHxSjzdhx9VRUC+8umDTIV2Wg9TTOUrR7ve
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $resourceTypeShrink;

    /**
     * @var string
     */
    public $riskLevelShrink;
    protected $_name = [
        'categoryCode'       => 'CategoryCode',
        'inspectionReportId' => 'InspectionReportId',
        'language'           => 'Language',
        'maxResults'         => 'MaxResults',
        'nextToken'          => 'NextToken',
        'resourceTypeShrink' => 'ResourceType',
        'riskLevelShrink'    => 'RiskLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->resourceTypeShrink) {
            $res['ResourceType'] = $this->resourceTypeShrink;
        }
        if (null !== $this->riskLevelShrink) {
            $res['RiskLevel'] = $this->riskLevelShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNisInspectionReportCheckItemsShrinkRequest
     */
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
            $model->resourceTypeShrink = $map['ResourceType'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevelShrink = $map['RiskLevel'];
        }

        return $model;
    }
}

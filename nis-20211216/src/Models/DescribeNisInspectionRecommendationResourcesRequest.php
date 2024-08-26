<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Tea\Model;

class DescribeNisInspectionRecommendationResourcesRequest extends Model
{
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
     * @description This parameter is required.
     *
     * @example nat_snat_cross_az_warn
     *
     * @var string
     */
    public $recommendationCode;
    protected $_name = [
        'inspectionReportId' => 'InspectionReportId',
        'language'           => 'Language',
        'maxResults'         => 'MaxResults',
        'nextToken'          => 'NextToken',
        'recommendationCode' => 'RecommendationCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->recommendationCode) {
            $res['RecommendationCode'] = $this->recommendationCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNisInspectionRecommendationResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['RecommendationCode'])) {
            $model->recommendationCode = $map['RecommendationCode'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportCheckItemsResponseBody\checkItemList;

use AlibabaCloud\Tea\Model;

class recommendationList extends Model
{
    /**
     * @var string
     */
    public $abnormality;

    /**
     * @var string
     */
    public $metadata;

    /**
     * @var string
     */
    public $reason;

    /**
     * @example nat_snat_cross_az_warn
     *
     * @var string
     */
    public $recommendationCode;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'abnormality'        => 'Abnormality',
        'metadata'           => 'Metadata',
        'reason'             => 'Reason',
        'recommendationCode' => 'RecommendationCode',
        'riskLevel'          => 'RiskLevel',
        'suggestion'         => 'Suggestion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abnormality) {
            $res['Abnormality'] = $this->abnormality;
        }
        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->recommendationCode) {
            $res['RecommendationCode'] = $this->recommendationCode;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recommendationList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Abnormality'])) {
            $model->abnormality = $map['Abnormality'];
        }
        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['RecommendationCode'])) {
            $model->recommendationCode = $map['RecommendationCode'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        return $model;
    }
}

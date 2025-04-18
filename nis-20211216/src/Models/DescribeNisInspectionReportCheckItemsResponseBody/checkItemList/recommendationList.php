<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\DescribeNisInspectionReportCheckItemsResponseBody\checkItemList;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $reasonCode;

    /**
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

    /**
     * @var string
     */
    public $suggestionCode;
    protected $_name = [
        'abnormality' => 'Abnormality',
        'metadata' => 'Metadata',
        'reason' => 'Reason',
        'reasonCode' => 'ReasonCode',
        'recommendationCode' => 'RecommendationCode',
        'riskLevel' => 'RiskLevel',
        'suggestion' => 'Suggestion',
        'suggestionCode' => 'SuggestionCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
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

        if (null !== $this->suggestionCode) {
            $res['SuggestionCode'] = $this->suggestionCode;
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
        if (isset($map['Abnormality'])) {
            $model->abnormality = $map['Abnormality'];
        }

        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
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

        if (isset($map['SuggestionCode'])) {
            $model->suggestionCode = $map['SuggestionCode'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiagnosticReportsResponseBody\reports\report\issues;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiagnosticReportsResponseBody\reports\report\issues\issue\recommendedActions;
use AlibabaCloud\Tea\Model;

class issue extends Model
{
    /**
     * @var string
     */
    public $issueCategory;

    /**
     * @var string
     */
    public $issueCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $occurrenceTime;

    /**
     * @var recommendedActions
     */
    public $recommendedActions;

    /**
     * @var string
     */
    public $severity;
    protected $_name = [
        'issueCategory'      => 'IssueCategory',
        'issueCode'          => 'IssueCode',
        'message'            => 'Message',
        'occurrenceTime'     => 'OccurrenceTime',
        'recommendedActions' => 'RecommendedActions',
        'severity'           => 'Severity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->issueCategory) {
            $res['IssueCategory'] = $this->issueCategory;
        }
        if (null !== $this->issueCode) {
            $res['IssueCode'] = $this->issueCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->occurrenceTime) {
            $res['OccurrenceTime'] = $this->occurrenceTime;
        }
        if (null !== $this->recommendedActions) {
            $res['RecommendedActions'] = null !== $this->recommendedActions ? $this->recommendedActions->toMap() : null;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return issue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IssueCategory'])) {
            $model->issueCategory = $map['IssueCategory'];
        }
        if (isset($map['IssueCode'])) {
            $model->issueCode = $map['IssueCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['OccurrenceTime'])) {
            $model->occurrenceTime = $map['OccurrenceTime'];
        }
        if (isset($map['RecommendedActions'])) {
            $model->recommendedActions = recommendedActions::fromMap($map['RecommendedActions']);
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        return $model;
    }
}

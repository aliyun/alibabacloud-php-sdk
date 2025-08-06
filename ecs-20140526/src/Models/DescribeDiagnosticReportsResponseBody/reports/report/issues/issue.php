<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticReportsResponseBody\reports\report\issues;

use AlibabaCloud\Dara\Model;

class issue extends Model
{
    /**
     * @var string
     */
    public $issueId;

    /**
     * @var string
     */
    public $metricCategory;

    /**
     * @var string
     */
    public $metricId;

    /**
     * @var string
     */
    public $severity;
    protected $_name = [
        'issueId' => 'IssueId',
        'metricCategory' => 'MetricCategory',
        'metricId' => 'MetricId',
        'severity' => 'Severity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->issueId) {
            $res['IssueId'] = $this->issueId;
        }

        if (null !== $this->metricCategory) {
            $res['MetricCategory'] = $this->metricCategory;
        }

        if (null !== $this->metricId) {
            $res['MetricId'] = $this->metricId;
        }

        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
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
        if (isset($map['IssueId'])) {
            $model->issueId = $map['IssueId'];
        }

        if (isset($map['MetricCategory'])) {
            $model->metricCategory = $map['MetricCategory'];
        }

        if (isset($map['MetricId'])) {
            $model->metricId = $map['MetricId'];
        }

        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        return $model;
    }
}

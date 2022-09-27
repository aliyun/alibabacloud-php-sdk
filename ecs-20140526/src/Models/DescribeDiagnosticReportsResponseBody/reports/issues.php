<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticReportsResponseBody\reports;

use AlibabaCloud\Tea\Model;

class issues extends Model
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
        'issueId'        => 'IssueId',
        'metricCategory' => 'MetricCategory',
        'metricId'       => 'MetricId',
        'severity'       => 'Severity',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return issues
     */
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

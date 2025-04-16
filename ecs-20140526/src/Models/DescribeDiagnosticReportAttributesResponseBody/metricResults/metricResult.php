<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticReportAttributesResponseBody\metricResults;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticReportAttributesResponseBody\metricResults\metricResult\issues;

class metricResult extends Model
{
    /**
     * @var issues
     */
    public $issues;

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

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'issues' => 'Issues',
        'metricCategory' => 'MetricCategory',
        'metricId' => 'MetricId',
        'severity' => 'Severity',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->issues) {
            $this->issues->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->issues) {
            $res['Issues'] = null !== $this->issues ? $this->issues->toArray($noStream) : $this->issues;
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
        if (isset($map['Issues'])) {
            $model->issues = issues::fromMap($map['Issues']);
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

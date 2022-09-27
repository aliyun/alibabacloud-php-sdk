<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiagnosticMetricsResponseBody;

use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $guestMetric;

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
    public $metricName;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $supportedOperatingSystem;
    protected $_name = [
        'description'              => 'Description',
        'guestMetric'              => 'GuestMetric',
        'metricCategory'           => 'MetricCategory',
        'metricId'                 => 'MetricId',
        'metricName'               => 'MetricName',
        'resourceType'             => 'ResourceType',
        'supportedOperatingSystem' => 'SupportedOperatingSystem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->guestMetric) {
            $res['GuestMetric'] = $this->guestMetric;
        }
        if (null !== $this->metricCategory) {
            $res['MetricCategory'] = $this->metricCategory;
        }
        if (null !== $this->metricId) {
            $res['MetricId'] = $this->metricId;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->supportedOperatingSystem) {
            $res['SupportedOperatingSystem'] = $this->supportedOperatingSystem;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GuestMetric'])) {
            $model->guestMetric = $map['GuestMetric'];
        }
        if (isset($map['MetricCategory'])) {
            $model->metricCategory = $map['MetricCategory'];
        }
        if (isset($map['MetricId'])) {
            $model->metricId = $map['MetricId'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SupportedOperatingSystem'])) {
            $model->supportedOperatingSystem = $map['SupportedOperatingSystem'];
        }

        return $model;
    }
}

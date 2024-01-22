<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\CreateApplicationScalingRuleResponseBody\data\metric;

use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @example 20
     *
     * @var int
     */
    public $metricTargetAverageUtilization;

    /**
     * @example CPU
     *
     * @var string
     */
    public $metricType;

    /**
     * @var string
     */
    public $slbId;

    /**
     * @var string
     */
    public $slbLogstore;

    /**
     * @var string
     */
    public $slbProject;

    /**
     * @var string
     */
    public $vport;
    protected $_name = [
        'metricTargetAverageUtilization' => 'MetricTargetAverageUtilization',
        'metricType'                     => 'MetricType',
        'slbId'                          => 'SlbId',
        'slbLogstore'                    => 'SlbLogstore',
        'slbProject'                     => 'SlbProject',
        'vport'                          => 'Vport',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricTargetAverageUtilization) {
            $res['MetricTargetAverageUtilization'] = $this->metricTargetAverageUtilization;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }
        if (null !== $this->slbLogstore) {
            $res['SlbLogstore'] = $this->slbLogstore;
        }
        if (null !== $this->slbProject) {
            $res['SlbProject'] = $this->slbProject;
        }
        if (null !== $this->vport) {
            $res['Vport'] = $this->vport;
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
        if (isset($map['MetricTargetAverageUtilization'])) {
            $model->metricTargetAverageUtilization = $map['MetricTargetAverageUtilization'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }
        if (isset($map['SlbLogstore'])) {
            $model->slbLogstore = $map['SlbLogstore'];
        }
        if (isset($map['SlbProject'])) {
            $model->slbProject = $map['SlbProject'];
        }
        if (isset($map['Vport'])) {
            $model->vport = $map['Vport'];
        }

        return $model;
    }
}

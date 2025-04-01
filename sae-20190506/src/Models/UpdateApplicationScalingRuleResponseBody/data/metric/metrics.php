<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\UpdateApplicationScalingRuleResponseBody\data\metric;

use AlibabaCloud\Dara\Model;

class metrics extends Model
{
    /**
     * @var int
     */
    public $metricTargetAverageUtilization;

    /**
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
        'metricType' => 'MetricType',
        'slbId' => 'SlbId',
        'slbLogstore' => 'SlbLogstore',
        'slbProject' => 'SlbProject',
        'vport' => 'Vport',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

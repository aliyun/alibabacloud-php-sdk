<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class PutExporterRuleRequest extends Model
{
    /**
     * @description The description of the data export rule.
     *
     * @example Export CPU metrics
     *
     * @var string
     */
    public $describe;

    /**
     * @description The destination to which the data is exported. Valid values of N: 1 to 20.
     *
     * @example distName1
     *
     * @var string[]
     */
    public $dstNames;

    /**
     * @description The name of the metric.
     *
     * For more information, see [Appendix 1: Metrics](~~163515~~).
     * @example cpu_total
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The namespace of the cloud service.
     *
     * > For more information, see [Appendix 1: Metrics](~~163515~~).
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the rule.
     *
     * > If the specified rule exists, the existing rule is modified. Otherwise, a rule is created.
     * @example MyRuleName
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The time window of the exported data. Unit: seconds.
     *
     * >
     *
     *   Separate multiple time windows with commas (,).
     *
     *   Data in a time window of less than 60 seconds cannot be exported.
     *
     * @example 60,300
     *
     * @var string
     */
    public $targetWindows;
    protected $_name = [
        'describe'      => 'Describe',
        'dstNames'      => 'DstNames',
        'metricName'    => 'MetricName',
        'namespace'     => 'Namespace',
        'regionId'      => 'RegionId',
        'ruleName'      => 'RuleName',
        'targetWindows' => 'TargetWindows',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->describe) {
            $res['Describe'] = $this->describe;
        }
        if (null !== $this->dstNames) {
            $res['DstNames'] = $this->dstNames;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->targetWindows) {
            $res['TargetWindows'] = $this->targetWindows;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutExporterRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Describe'])) {
            $model->describe = $map['Describe'];
        }
        if (isset($map['DstNames'])) {
            if (!empty($map['DstNames'])) {
                $model->dstNames = $map['DstNames'];
            }
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['TargetWindows'])) {
            $model->targetWindows = $map['TargetWindows'];
        }

        return $model;
    }
}

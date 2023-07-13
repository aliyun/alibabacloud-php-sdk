<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterRuleListResponseBody\datapoints;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterRuleListResponseBody\datapoints\datapoint\dstName;
use AlibabaCloud\Tea\Model;

class datapoint extends Model
{
    /**
     * @description The time when the rule was created. The value is a UNIX timestamp.
     *
     * @example 1584024616228
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The description of the rule.
     *
     * @example Export monitoring data
     *
     * @var string
     */
    public $describe;

    /**
     * @description The associated dimensions.
     *
     * @example {"instanceId":"xxxxx"}
     *
     * @var string
     */
    public $dimension;

    /**
     * @var dstName
     */
    public $dstName;

    /**
     * @description Indicates whether the rule is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The name of the metric.
     *
     * > For more information, see [DescribeMetricMetaList](~~98846~~) or [Appendix 1: Metrics](~~28619~~).
     * @example cpu_total
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The namespace of the service.
     *
     * > For more information, see [DescribeMetricMetaList](~~98846~~) or [Appendix 1: Metrics](~~28619~~).
     * @example acs_ecs_dashboard
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The name of the data export rule.
     *
     * @example myRuleName
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The time window of the exported data.\
     * > Data in a time window of less than 60 seconds cannot be exported.
     * @example 60,300
     *
     * @var string
     */
    public $targetWindows;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'describe'      => 'Describe',
        'dimension'     => 'Dimension',
        'dstName'       => 'DstName',
        'enabled'       => 'Enabled',
        'metricName'    => 'MetricName',
        'namespace'     => 'Namespace',
        'ruleName'      => 'RuleName',
        'targetWindows' => 'TargetWindows',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->describe) {
            $res['Describe'] = $this->describe;
        }
        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }
        if (null !== $this->dstName) {
            $res['DstName'] = null !== $this->dstName ? $this->dstName->toMap() : null;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
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
     * @return datapoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Describe'])) {
            $model->describe = $map['Describe'];
        }
        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }
        if (isset($map['DstName'])) {
            $model->dstName = dstName::fromMap($map['DstName']);
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
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

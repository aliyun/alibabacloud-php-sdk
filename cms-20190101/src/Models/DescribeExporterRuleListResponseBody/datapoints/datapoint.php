<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterRuleListResponseBody\datapoints;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeExporterRuleListResponseBody\datapoints\datapoint\dstName;
use AlibabaCloud\Tea\Model;

class datapoint extends Model
{
    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $describe;

    /**
     * @var string
     */
    public $targetWindows;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var dstName
     */
    public $dstName;

    /**
     * @var string
     */
    public $dimension;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'metricName'    => 'MetricName',
        'describe'      => 'Describe',
        'targetWindows' => 'TargetWindows',
        'createTime'    => 'CreateTime',
        'enabled'       => 'Enabled',
        'dstName'       => 'DstName',
        'dimension'     => 'Dimension',
        'namespace'     => 'Namespace',
        'ruleName'      => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->describe) {
            $res['Describe'] = $this->describe;
        }
        if (null !== $this->targetWindows) {
            $res['TargetWindows'] = $this->targetWindows;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->dstName) {
            $res['DstName'] = null !== $this->dstName ? $this->dstName->toMap() : null;
        }
        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
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
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Describe'])) {
            $model->describe = $map['Describe'];
        }
        if (isset($map['TargetWindows'])) {
            $model->targetWindows = $map['TargetWindows'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['DstName'])) {
            $model->dstName = dstName::fromMap($map['DstName']);
        }
        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}

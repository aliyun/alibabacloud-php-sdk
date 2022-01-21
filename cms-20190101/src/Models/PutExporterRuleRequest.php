<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class PutExporterRuleRequest extends Model
{
    /**
     * @var string
     */
    public $describe;

    /**
     * @var string[]
     */
    public $dstNames;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $ruleName;

    /**
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

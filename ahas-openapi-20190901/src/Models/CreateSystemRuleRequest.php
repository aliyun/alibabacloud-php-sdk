<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateSystemRuleRequest extends Model
{
    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $metricType;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $ahasRegionId;
    protected $_name = [
        'namespace'    => 'Namespace',
        'appName'      => 'AppName',
        'metricType'   => 'MetricType',
        'threshold'    => 'Threshold',
        'enable'       => 'Enable',
        'ahasRegionId' => 'AhasRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->ahasRegionId) {
            $res['AhasRegionId'] = $this->ahasRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSystemRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['AhasRegionId'])) {
            $model->ahasRegionId = $map['AhasRegionId'];
        }

        return $model;
    }
}

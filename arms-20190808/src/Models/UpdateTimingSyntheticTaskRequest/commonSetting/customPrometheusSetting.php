<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskRequest\commonSetting;

use AlibabaCloud\Tea\Model;

class customPrometheusSetting extends Model
{
    /**
     * @description A reserved parameter.
     *
     * @example A reserved parameter.
     *
     * @var string
     */
    public $prometheusClusterId;

    /**
     * @description A reserved parameter.
     *
     * @example A reserved parameter.
     *
     * @var string
     */
    public $prometheusClusterRegion;

    /**
     * @description The reserved parameters.
     *
     * @var string[]
     */
    public $prometheusLabels;
    protected $_name = [
        'prometheusClusterId' => 'PrometheusClusterId',
        'prometheusClusterRegion' => 'PrometheusClusterRegion',
        'prometheusLabels' => 'PrometheusLabels',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->prometheusClusterId) {
            $res['PrometheusClusterId'] = $this->prometheusClusterId;
        }
        if (null !== $this->prometheusClusterRegion) {
            $res['PrometheusClusterRegion'] = $this->prometheusClusterRegion;
        }
        if (null !== $this->prometheusLabels) {
            $res['PrometheusLabels'] = $this->prometheusLabels;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customPrometheusSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrometheusClusterId'])) {
            $model->prometheusClusterId = $map['PrometheusClusterId'];
        }
        if (isset($map['PrometheusClusterRegion'])) {
            $model->prometheusClusterRegion = $map['PrometheusClusterRegion'];
        }
        if (isset($map['PrometheusLabels'])) {
            $model->prometheusLabels = $map['PrometheusLabels'];
        }

        return $model;
    }
}

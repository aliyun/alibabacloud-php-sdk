<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskRequest\commonSetting;

use AlibabaCloud\Dara\Model;

class customPrometheusSetting extends Model
{
    /**
     * @var string
     */
    public $prometheusClusterId;
    /**
     * @var string
     */
    public $prometheusClusterRegion;
    /**
     * @var string[]
     */
    public $prometheusLabels;
    protected $_name = [
        'prometheusClusterId'     => 'PrometheusClusterId',
        'prometheusClusterRegion' => 'PrometheusClusterRegion',
        'prometheusLabels'        => 'PrometheusLabels',
    ];

    public function validate()
    {
        if (\is_array($this->prometheusLabels)) {
            Model::validateArray($this->prometheusLabels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->prometheusClusterId) {
            $res['PrometheusClusterId'] = $this->prometheusClusterId;
        }

        if (null !== $this->prometheusClusterRegion) {
            $res['PrometheusClusterRegion'] = $this->prometheusClusterRegion;
        }

        if (null !== $this->prometheusLabels) {
            if (\is_array($this->prometheusLabels)) {
                $res['PrometheusLabels'] = [];
                foreach ($this->prometheusLabels as $key1 => $value1) {
                    $res['PrometheusLabels'][$key1] = $value1;
                }
            }
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
        if (isset($map['PrometheusClusterId'])) {
            $model->prometheusClusterId = $map['PrometheusClusterId'];
        }

        if (isset($map['PrometheusClusterRegion'])) {
            $model->prometheusClusterRegion = $map['PrometheusClusterRegion'];
        }

        if (isset($map['PrometheusLabels'])) {
            if (!empty($map['PrometheusLabels'])) {
                $model->prometheusLabels = [];
                foreach ($map['PrometheusLabels'] as $key1 => $value1) {
                    $model->prometheusLabels[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}

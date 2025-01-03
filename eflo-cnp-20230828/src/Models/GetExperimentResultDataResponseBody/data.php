<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResultDataResponseBody;

use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResultDataResponseBody\data\metricsInfos;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 8
     *
     * @var string
     */
    public $gpuNum;

    /**
     * @example p-jt-waf-app1
     *
     * @var string
     */
    public $hostname;

    /**
     * @var metricsInfos[]
     */
    public $metricsInfos;

    /**
     * @example hzs-forge-sdxl-online-7ff4d86444-pc95h
     *
     * @var string
     */
    public $podName;
    protected $_name = [
        'gpuNum'       => 'GpuNum',
        'hostname'     => 'Hostname',
        'metricsInfos' => 'MetricsInfos',
        'podName'      => 'PodName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gpuNum) {
            $res['GpuNum'] = $this->gpuNum;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->metricsInfos) {
            $res['MetricsInfos'] = [];
            if (null !== $this->metricsInfos && \is_array($this->metricsInfos)) {
                $n = 0;
                foreach ($this->metricsInfos as $item) {
                    $res['MetricsInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->podName) {
            $res['PodName'] = $this->podName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GpuNum'])) {
            $model->gpuNum = $map['GpuNum'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['MetricsInfos'])) {
            if (!empty($map['MetricsInfos'])) {
                $model->metricsInfos = [];
                $n                   = 0;
                foreach ($map['MetricsInfos'] as $item) {
                    $model->metricsInfos[$n++] = null !== $item ? metricsInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PodName'])) {
            $model->podName = $map['PodName'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResultDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\GetExperimentResultDataResponseBody\data\metricsInfos;

class data extends Model
{
    /**
     * @var string
     */
    public $gpuNum;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var metricsInfos[]
     */
    public $metricsInfos;

    /**
     * @var string
     */
    public $podName;
    protected $_name = [
        'gpuNum' => 'GpuNum',
        'hostname' => 'Hostname',
        'metricsInfos' => 'MetricsInfos',
        'podName' => 'PodName',
    ];

    public function validate()
    {
        if (\is_array($this->metricsInfos)) {
            Model::validateArray($this->metricsInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gpuNum) {
            $res['GpuNum'] = $this->gpuNum;
        }

        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->metricsInfos) {
            if (\is_array($this->metricsInfos)) {
                $res['MetricsInfos'] = [];
                $n1 = 0;
                foreach ($this->metricsInfos as $item1) {
                    $res['MetricsInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->podName) {
            $res['PodName'] = $this->podName;
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
        if (isset($map['GpuNum'])) {
            $model->gpuNum = $map['GpuNum'];
        }

        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['MetricsInfos'])) {
            if (!empty($map['MetricsInfos'])) {
                $model->metricsInfos = [];
                $n1 = 0;
                foreach ($map['MetricsInfos'] as $item1) {
                    $model->metricsInfos[$n1++] = metricsInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['PodName'])) {
            $model->podName = $map['PodName'];
        }

        return $model;
    }
}

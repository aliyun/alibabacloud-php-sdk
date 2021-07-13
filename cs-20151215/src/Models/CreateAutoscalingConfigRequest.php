<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CreateAutoscalingConfigRequest extends Model
{
    /**
     * @description 静默时间，扩容出的节点，在静默时间过后，方可进入缩容判断
     *
     * @var string
     */
    public $coolDownDuration;

    /**
     * @description 缩容触发时延，节点缩容时需要连续满足触发时延所设定的时间，方可进行缩容
     *
     * @var string
     */
    public $unneededDuration;

    /**
     * @description 缩容阈值，节点上 Request 的资源与总资源量的比值
     *
     * @var string
     */
    public $utilizationThreshold;

    /**
     * @description GPU缩容阈值，节点上 Request 的资源与总资源量的比值
     *
     * @var string
     */
    public $gpuUtilizationThreshold;

    /**
     * @description 弹性灵敏度，判断伸缩的间隔时间
     *
     * @var string
     */
    public $scanInterval;
    protected $_name = [
        'coolDownDuration'        => 'cool_down_duration',
        'unneededDuration'        => 'unneeded_duration',
        'utilizationThreshold'    => 'utilization_threshold',
        'gpuUtilizationThreshold' => 'gpu_utilization_threshold',
        'scanInterval'            => 'scan_interval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coolDownDuration) {
            $res['cool_down_duration'] = $this->coolDownDuration;
        }
        if (null !== $this->unneededDuration) {
            $res['unneeded_duration'] = $this->unneededDuration;
        }
        if (null !== $this->utilizationThreshold) {
            $res['utilization_threshold'] = $this->utilizationThreshold;
        }
        if (null !== $this->gpuUtilizationThreshold) {
            $res['gpu_utilization_threshold'] = $this->gpuUtilizationThreshold;
        }
        if (null !== $this->scanInterval) {
            $res['scan_interval'] = $this->scanInterval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAutoscalingConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cool_down_duration'])) {
            $model->coolDownDuration = $map['cool_down_duration'];
        }
        if (isset($map['unneeded_duration'])) {
            $model->unneededDuration = $map['unneeded_duration'];
        }
        if (isset($map['utilization_threshold'])) {
            $model->utilizationThreshold = $map['utilization_threshold'];
        }
        if (isset($map['gpu_utilization_threshold'])) {
            $model->gpuUtilizationThreshold = $map['gpu_utilization_threshold'];
        }
        if (isset($map['scan_interval'])) {
            $model->scanInterval = $map['scan_interval'];
        }

        return $model;
    }
}

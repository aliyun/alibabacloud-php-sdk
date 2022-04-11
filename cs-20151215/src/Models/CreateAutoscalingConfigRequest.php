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
     * @description 节点池扩容顺序策略
     *
     * @var string
     */
    public $expander;

    /**
     * @description GPU缩容阈值，节点上 Request 的资源与总资源量的比值
     *
     * @var string
     */
    public $gpuUtilizationThreshold;

    /**
     * @description 是否允许缩容
     *
     * @var bool
     */
    public $scaleDownEnabled;

    /**
     * @description 弹性灵敏度，判断伸缩的间隔时间
     *
     * @var string
     */
    public $scanInterval;

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
    protected $_name = [
        'coolDownDuration'        => 'cool_down_duration',
        'expander'                => 'expander',
        'gpuUtilizationThreshold' => 'gpu_utilization_threshold',
        'scaleDownEnabled'        => 'scale_down_enabled',
        'scanInterval'            => 'scan_interval',
        'unneededDuration'        => 'unneeded_duration',
        'utilizationThreshold'    => 'utilization_threshold',
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
        if (null !== $this->expander) {
            $res['expander'] = $this->expander;
        }
        if (null !== $this->gpuUtilizationThreshold) {
            $res['gpu_utilization_threshold'] = $this->gpuUtilizationThreshold;
        }
        if (null !== $this->scaleDownEnabled) {
            $res['scale_down_enabled'] = $this->scaleDownEnabled;
        }
        if (null !== $this->scanInterval) {
            $res['scan_interval'] = $this->scanInterval;
        }
        if (null !== $this->unneededDuration) {
            $res['unneeded_duration'] = $this->unneededDuration;
        }
        if (null !== $this->utilizationThreshold) {
            $res['utilization_threshold'] = $this->utilizationThreshold;
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
        if (isset($map['expander'])) {
            $model->expander = $map['expander'];
        }
        if (isset($map['gpu_utilization_threshold'])) {
            $model->gpuUtilizationThreshold = $map['gpu_utilization_threshold'];
        }
        if (isset($map['scale_down_enabled'])) {
            $model->scaleDownEnabled = $map['scale_down_enabled'];
        }
        if (isset($map['scan_interval'])) {
            $model->scanInterval = $map['scan_interval'];
        }
        if (isset($map['unneeded_duration'])) {
            $model->unneededDuration = $map['unneeded_duration'];
        }
        if (isset($map['utilization_threshold'])) {
            $model->utilizationThreshold = $map['utilization_threshold'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CreateAutoscalingConfigRequest extends Model
{
    /**
     * @var string
     */
    public $coolDownDuration;

    /**
     * @var string
     */
    public $expander;

    /**
     * @var string
     */
    public $gpuUtilizationThreshold;

    /**
     * @var bool
     */
    public $scaleDownEnabled;

    /**
     * @var string
     */
    public $scanInterval;

    /**
     * @var string
     */
    public $unneededDuration;

    /**
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

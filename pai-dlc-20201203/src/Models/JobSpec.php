<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class JobSpec extends Model
{
    /**
     * @var AssignNodeSpec
     */
    public $assignNodeSpec;

    /**
     * @var AutoScalingSpec
     */
    public $autoScalingSpec;

    /**
     * @example ecs.c6.large
     *
     * @var string
     */
    public $ecsSpec;

    /**
     * @var ExtraPodSpec
     */
    public $extraPodSpec;

    /**
     * @example registry.cn-hangzhou.aliyuncs.com/pai-dlc/tensorflow-training:1.12.2PAI-cpu-py27-ubuntu16.04
     *
     * @var string
     */
    public $image;

    /**
     * @var ImageConfig
     */
    public $imageConfig;

    /**
     * @deprecated
     *
     * @var bool
     */
    public $isCheif;

    /**
     * @var bool
     */
    public $isChief;

    /**
     * @var LocalMountSpec[]
     */
    public $localMountSpecs;

    /**
     * @example 1
     *
     * @var int
     */
    public $podCount;

    /**
     * @var ResourceConfig
     */
    public $resourceConfig;

    /**
     * @var string
     */
    public $restartPolicy;

    /**
     * @var ServiceSpec
     */
    public $serviceSpec;

    /**
     * @var SpotSpec
     */
    public $spotSpec;

    /**
     * @example Worker
     *
     * @var string
     */
    public $type;

    /**
     * @example false
     *
     * @deprecated
     *
     * @var bool
     */
    public $useSpotInstance;
    protected $_name = [
        'assignNodeSpec' => 'AssignNodeSpec',
        'autoScalingSpec' => 'AutoScalingSpec',
        'ecsSpec' => 'EcsSpec',
        'extraPodSpec' => 'ExtraPodSpec',
        'image' => 'Image',
        'imageConfig' => 'ImageConfig',
        'isCheif' => 'IsCheif',
        'isChief' => 'IsChief',
        'localMountSpecs' => 'LocalMountSpecs',
        'podCount' => 'PodCount',
        'resourceConfig' => 'ResourceConfig',
        'restartPolicy' => 'RestartPolicy',
        'serviceSpec' => 'ServiceSpec',
        'spotSpec' => 'SpotSpec',
        'type' => 'Type',
        'useSpotInstance' => 'UseSpotInstance',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignNodeSpec) {
            $res['AssignNodeSpec'] = null !== $this->assignNodeSpec ? $this->assignNodeSpec->toMap() : null;
        }
        if (null !== $this->autoScalingSpec) {
            $res['AutoScalingSpec'] = null !== $this->autoScalingSpec ? $this->autoScalingSpec->toMap() : null;
        }
        if (null !== $this->ecsSpec) {
            $res['EcsSpec'] = $this->ecsSpec;
        }
        if (null !== $this->extraPodSpec) {
            $res['ExtraPodSpec'] = null !== $this->extraPodSpec ? $this->extraPodSpec->toMap() : null;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->imageConfig) {
            $res['ImageConfig'] = null !== $this->imageConfig ? $this->imageConfig->toMap() : null;
        }
        if (null !== $this->isCheif) {
            $res['IsCheif'] = $this->isCheif;
        }
        if (null !== $this->isChief) {
            $res['IsChief'] = $this->isChief;
        }
        if (null !== $this->localMountSpecs) {
            $res['LocalMountSpecs'] = [];
            if (null !== $this->localMountSpecs && \is_array($this->localMountSpecs)) {
                $n = 0;
                foreach ($this->localMountSpecs as $item) {
                    $res['LocalMountSpecs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->podCount) {
            $res['PodCount'] = $this->podCount;
        }
        if (null !== $this->resourceConfig) {
            $res['ResourceConfig'] = null !== $this->resourceConfig ? $this->resourceConfig->toMap() : null;
        }
        if (null !== $this->restartPolicy) {
            $res['RestartPolicy'] = $this->restartPolicy;
        }
        if (null !== $this->serviceSpec) {
            $res['ServiceSpec'] = null !== $this->serviceSpec ? $this->serviceSpec->toMap() : null;
        }
        if (null !== $this->spotSpec) {
            $res['SpotSpec'] = null !== $this->spotSpec ? $this->spotSpec->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->useSpotInstance) {
            $res['UseSpotInstance'] = $this->useSpotInstance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JobSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssignNodeSpec'])) {
            $model->assignNodeSpec = AssignNodeSpec::fromMap($map['AssignNodeSpec']);
        }
        if (isset($map['AutoScalingSpec'])) {
            $model->autoScalingSpec = AutoScalingSpec::fromMap($map['AutoScalingSpec']);
        }
        if (isset($map['EcsSpec'])) {
            $model->ecsSpec = $map['EcsSpec'];
        }
        if (isset($map['ExtraPodSpec'])) {
            $model->extraPodSpec = ExtraPodSpec::fromMap($map['ExtraPodSpec']);
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['ImageConfig'])) {
            $model->imageConfig = ImageConfig::fromMap($map['ImageConfig']);
        }
        if (isset($map['IsCheif'])) {
            $model->isCheif = $map['IsCheif'];
        }
        if (isset($map['IsChief'])) {
            $model->isChief = $map['IsChief'];
        }
        if (isset($map['LocalMountSpecs'])) {
            if (!empty($map['LocalMountSpecs'])) {
                $model->localMountSpecs = [];
                $n = 0;
                foreach ($map['LocalMountSpecs'] as $item) {
                    $model->localMountSpecs[$n++] = null !== $item ? LocalMountSpec::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PodCount'])) {
            $model->podCount = $map['PodCount'];
        }
        if (isset($map['ResourceConfig'])) {
            $model->resourceConfig = ResourceConfig::fromMap($map['ResourceConfig']);
        }
        if (isset($map['RestartPolicy'])) {
            $model->restartPolicy = $map['RestartPolicy'];
        }
        if (isset($map['ServiceSpec'])) {
            $model->serviceSpec = ServiceSpec::fromMap($map['ServiceSpec']);
        }
        if (isset($map['SpotSpec'])) {
            $model->spotSpec = SpotSpec::fromMap($map['SpotSpec']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UseSpotInstance'])) {
            $model->useSpotInstance = $map['UseSpotInstance'];
        }

        return $model;
    }
}

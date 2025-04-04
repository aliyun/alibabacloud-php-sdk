<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class JobSpec extends Model
{
    /**
     * @var AssignNodeSpec
     */
    public $assignNodeSpec;

    /**
     * @var string
     */
    public $ecsSpec;

    /**
     * @var ExtraPodSpec
     */
    public $extraPodSpec;

    /**
     * @var string
     */
    public $image;

    /**
     * @var ImageConfig
     */
    public $imageConfig;

    /**
     * @var int
     */
    public $podCount;

    /**
     * @var ResourceConfig
     */
    public $resourceConfig;

    /**
     * @var SpotSpec
     */
    public $spotSpec;

    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $useSpotInstance;
    protected $_name = [
        'assignNodeSpec' => 'AssignNodeSpec',
        'ecsSpec' => 'EcsSpec',
        'extraPodSpec' => 'ExtraPodSpec',
        'image' => 'Image',
        'imageConfig' => 'ImageConfig',
        'podCount' => 'PodCount',
        'resourceConfig' => 'ResourceConfig',
        'spotSpec' => 'SpotSpec',
        'type' => 'Type',
        'useSpotInstance' => 'UseSpotInstance',
    ];

    public function validate()
    {
        if (null !== $this->assignNodeSpec) {
            $this->assignNodeSpec->validate();
        }
        if (null !== $this->extraPodSpec) {
            $this->extraPodSpec->validate();
        }
        if (null !== $this->imageConfig) {
            $this->imageConfig->validate();
        }
        if (null !== $this->resourceConfig) {
            $this->resourceConfig->validate();
        }
        if (null !== $this->spotSpec) {
            $this->spotSpec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignNodeSpec) {
            $res['AssignNodeSpec'] = null !== $this->assignNodeSpec ? $this->assignNodeSpec->toArray($noStream) : $this->assignNodeSpec;
        }

        if (null !== $this->ecsSpec) {
            $res['EcsSpec'] = $this->ecsSpec;
        }

        if (null !== $this->extraPodSpec) {
            $res['ExtraPodSpec'] = null !== $this->extraPodSpec ? $this->extraPodSpec->toArray($noStream) : $this->extraPodSpec;
        }

        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        if (null !== $this->imageConfig) {
            $res['ImageConfig'] = null !== $this->imageConfig ? $this->imageConfig->toArray($noStream) : $this->imageConfig;
        }

        if (null !== $this->podCount) {
            $res['PodCount'] = $this->podCount;
        }

        if (null !== $this->resourceConfig) {
            $res['ResourceConfig'] = null !== $this->resourceConfig ? $this->resourceConfig->toArray($noStream) : $this->resourceConfig;
        }

        if (null !== $this->spotSpec) {
            $res['SpotSpec'] = null !== $this->spotSpec ? $this->spotSpec->toArray($noStream) : $this->spotSpec;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->useSpotInstance) {
            $res['UseSpotInstance'] = $this->useSpotInstance;
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
        if (isset($map['AssignNodeSpec'])) {
            $model->assignNodeSpec = AssignNodeSpec::fromMap($map['AssignNodeSpec']);
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

        if (isset($map['PodCount'])) {
            $model->podCount = $map['PodCount'];
        }

        if (isset($map['ResourceConfig'])) {
            $model->resourceConfig = ResourceConfig::fromMap($map['ResourceConfig']);
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

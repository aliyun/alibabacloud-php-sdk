<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class JobSpec extends Model
{
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
    public $type;

    /**
     * @var bool
     */
    public $useSpotInstance;
    protected $_name = [
        'ecsSpec'         => 'EcsSpec',
        'extraPodSpec'    => 'ExtraPodSpec',
        'image'           => 'Image',
        'podCount'        => 'PodCount',
        'resourceConfig'  => 'ResourceConfig',
        'type'            => 'Type',
        'useSpotInstance' => 'UseSpotInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsSpec) {
            $res['EcsSpec'] = $this->ecsSpec;
        }
        if (null !== $this->extraPodSpec) {
            $res['ExtraPodSpec'] = null !== $this->extraPodSpec ? $this->extraPodSpec->toMap() : null;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->podCount) {
            $res['PodCount'] = $this->podCount;
        }
        if (null !== $this->resourceConfig) {
            $res['ResourceConfig'] = null !== $this->resourceConfig ? $this->resourceConfig->toMap() : null;
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
        if (isset($map['EcsSpec'])) {
            $model->ecsSpec = $map['EcsSpec'];
        }
        if (isset($map['ExtraPodSpec'])) {
            $model->extraPodSpec = ExtraPodSpec::fromMap($map['ExtraPodSpec']);
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['PodCount'])) {
            $model->podCount = $map['PodCount'];
        }
        if (isset($map['ResourceConfig'])) {
            $model->resourceConfig = ResourceConfig::fromMap($map['ResourceConfig']);
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

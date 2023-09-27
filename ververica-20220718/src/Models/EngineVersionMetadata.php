<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class EngineVersionMetadata extends Model
{
    /**
     * @example vvr-6.0.0-flink-1.15
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @var EngineVersionSupportedFeatures
     */
    public $features;

    /**
     * @example STABLE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'engineVersion' => 'engineVersion',
        'features'      => 'features',
        'status'        => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->engineVersion) {
            $res['engineVersion'] = $this->engineVersion;
        }
        if (null !== $this->features) {
            $res['features'] = null !== $this->features ? $this->features->toMap() : null;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EngineVersionMetadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['engineVersion'])) {
            $model->engineVersion = $map['engineVersion'];
        }
        if (isset($map['features'])) {
            $model->features = EngineVersionSupportedFeatures::fromMap($map['features']);
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}

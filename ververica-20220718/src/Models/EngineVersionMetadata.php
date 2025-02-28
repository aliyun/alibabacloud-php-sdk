<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class EngineVersionMetadata extends Model
{
    /**
     * @var string
     */
    public $engineVersion;
    /**
     * @var EngineVersionSupportedFeatures
     */
    public $features;
    /**
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
        if (null !== $this->features) {
            $this->features->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->engineVersion) {
            $res['engineVersion'] = $this->engineVersion;
        }

        if (null !== $this->features) {
            $res['features'] = null !== $this->features ? $this->features->toArray($noStream) : $this->features;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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

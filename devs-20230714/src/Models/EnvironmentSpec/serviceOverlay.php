<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\EnvironmentSpec;

use AlibabaCloud\Tea\Model;

class serviceOverlay extends Model
{
    /**
     * @example {"fc3":{"timeout":600}}
     *
     * @var mixed[]
     */
    public $components;

    /**
     * @example {"dummyFunction":{"timeout":600}}
     *
     * @var mixed[]
     */
    public $resources;
    protected $_name = [
        'components' => 'components',
        'resources'  => 'resources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->components) {
            $res['components'] = $this->components;
        }
        if (null !== $this->resources) {
            $res['resources'] = $this->resources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceOverlay
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['components'])) {
            $model->components = $map['components'];
        }
        if (isset($map['resources'])) {
            $model->resources = $map['resources'];
        }

        return $model;
    }
}

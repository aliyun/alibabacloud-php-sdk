<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceSourceRequest;

use AlibabaCloud\Tea\Model;

class nacosServiceSourceConfig extends Model
{
    /**
     * @example mse-cn-328fc8***
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'instanceId' => 'instanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nacosServiceSourceConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        return $model;
    }
}

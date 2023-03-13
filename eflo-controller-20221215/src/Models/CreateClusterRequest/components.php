<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\components\componentConfig;
use AlibabaCloud\Tea\Model;

class components extends Model
{
    /**
     * @var componentConfig
     */
    public $componentConfig;

    /**
     * @example ACKEdge
     *
     * @var string
     */
    public $componentType;
    protected $_name = [
        'componentConfig' => 'ComponentConfig',
        'componentType'   => 'ComponentType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentConfig) {
            $res['ComponentConfig'] = null !== $this->componentConfig ? $this->componentConfig->toMap() : null;
        }
        if (null !== $this->componentType) {
            $res['ComponentType'] = $this->componentType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return components
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentConfig'])) {
            $model->componentConfig = componentConfig::fromMap($map['ComponentConfig']);
        }
        if (isset($map['ComponentType'])) {
            $model->componentType = $map['ComponentType'];
        }

        return $model;
    }
}

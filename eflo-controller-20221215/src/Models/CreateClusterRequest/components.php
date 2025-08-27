<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\components\componentConfig;

class components extends Model
{
    /**
     * @var componentConfig
     */
    public $componentConfig;

    /**
     * @var string
     */
    public $componentType;
    protected $_name = [
        'componentConfig' => 'ComponentConfig',
        'componentType' => 'ComponentType',
    ];

    public function validate()
    {
        if (null !== $this->componentConfig) {
            $this->componentConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentConfig) {
            $res['ComponentConfig'] = null !== $this->componentConfig ? $this->componentConfig->toArray($noStream) : $this->componentConfig;
        }

        if (null !== $this->componentType) {
            $res['ComponentType'] = $this->componentType;
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
        if (isset($map['ComponentConfig'])) {
            $model->componentConfig = componentConfig::fromMap($map['ComponentConfig']);
        }

        if (isset($map['ComponentType'])) {
            $model->componentType = $map['ComponentType'];
        }

        return $model;
    }
}

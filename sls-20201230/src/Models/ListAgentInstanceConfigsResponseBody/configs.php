<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\ListAgentInstanceConfigsResponseBody;

use AlibabaCloud\Dara\Model;

class configs extends Model
{
    /**
     * @var string
     */
    public $attributes;

    /**
     * @var string
     */
    public $configType;
    protected $_name = [
        'attributes' => 'attributes',
        'configType' => 'configType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['attributes'] = $this->attributes;
        }

        if (null !== $this->configType) {
            $res['configType'] = $this->configType;
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
        if (isset($map['attributes'])) {
            $model->attributes = $map['attributes'];
        }

        if (isset($map['configType'])) {
            $model->configType = $map['configType'];
        }

        return $model;
    }
}

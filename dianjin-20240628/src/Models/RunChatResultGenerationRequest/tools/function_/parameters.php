<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RunChatResultGenerationRequest\tools\function_;

use AlibabaCloud\Tea\Model;

class parameters extends Model
{
    /**
     * @example {
     * }
     * @var mixed[]
     */
    public $properties;

    /**
     * @example object
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'properties' => 'properties',
        'type'       => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->properties) {
            $res['properties'] = $this->properties;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['properties'])) {
            $model->properties = $map['properties'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

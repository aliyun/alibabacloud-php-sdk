<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageComponentsResponseBody\imageComponent\imageComponentSet\parameters;

use AlibabaCloud\Tea\Model;

class parameter extends Model
{
    /**
     * @description The default value of the parameter.
     *
     * @example null
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @description The name of the parameter.
     *
     * @example null
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the parameter.
     *
     * Valid values:
     *
     *   String
     *   Number
     *   Boolean
     *
     * @example null
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'defaultValue' => 'DefaultValue',
        'name'         => 'Name',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

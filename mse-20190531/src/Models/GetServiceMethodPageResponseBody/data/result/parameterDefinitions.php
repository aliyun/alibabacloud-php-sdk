<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetServiceMethodPageResponseBody\data\result;

use AlibabaCloud\Tea\Model;

class parameterDefinitions extends Model
{
    /**
     * @example 参数描述示例
     *
     * @var string
     */
    public $description;

    /**
     * @example aParam
     *
     * @var string
     */
    public $name;

    /**
     * @example java.lang.String
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'description' => 'Description',
        'name'        => 'Name',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
     * @return parameterDefinitions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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

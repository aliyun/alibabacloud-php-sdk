<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeAppServiceDetailResponseBody\data\methods;

use AlibabaCloud\Tea\Model;

class parameterDefinitions extends Model
{
    /**
     * @description The description of the parameter.
     *
     * @example description
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the parameter.
     *
     * @example arg0
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the parameter.
     *
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

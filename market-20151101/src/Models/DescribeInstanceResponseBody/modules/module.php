<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstanceResponseBody\modules;

use AlibabaCloud\SDK\Market\V20151101\Models\DescribeInstanceResponseBody\modules\module\properties;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example package_config
     *
     * @var string
     */
    public $code;

    /**
     * @example 101*********026
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var properties
     */
    public $properties;
    protected $_name = [
        'code'       => 'Code',
        'id'         => 'Id',
        'name'       => 'Name',
        'properties' => 'Properties',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->properties) {
            $res['Properties'] = null !== $this->properties ? $this->properties->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Properties'])) {
            $model->properties = properties::fromMap($map['Properties']);
        }

        return $model;
    }
}

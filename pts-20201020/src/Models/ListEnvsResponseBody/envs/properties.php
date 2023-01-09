<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\ListEnvsResponseBody\envs;

use AlibabaCloud\Tea\Model;

class properties extends Model
{
    /**
     * @example 远程主机
     *
     * @var string
     */
    public $description;

    /**
     * @example remote_hosts
     *
     * @var string
     */
    public $name;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'description' => 'Description',
        'name'        => 'Name',
        'value'       => 'Value',
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
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return properties
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
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}

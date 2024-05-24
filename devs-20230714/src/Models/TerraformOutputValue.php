<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class TerraformOutputValue extends Model
{
    /**
     * @example The VPC ID where the resource is located.
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example vpcId
     *
     * @var string
     */
    public $name;

    /**
     * @example false
     *
     * @var bool
     */
    public $sensitive;
    protected $_name = [
        'description' => 'description',
        'name'        => 'name',
        'sensitive'   => 'sensitive',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->sensitive) {
            $res['sensitive'] = $this->sensitive;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TerraformOutputValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['sensitive'])) {
            $model->sensitive = $map['sensitive'];
        }

        return $model;
    }
}

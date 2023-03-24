<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class CreateUserGroupShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $attributesShrink;

    /**
     * @var string
     */
    public $description;

    /**
     * @example user_group_name
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'attributesShrink' => 'Attributes',
        'description'      => 'Description',
        'name'             => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributesShrink) {
            $res['Attributes'] = $this->attributesShrink;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUserGroupShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attributes'])) {
            $model->attributesShrink = $map['Attributes'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}

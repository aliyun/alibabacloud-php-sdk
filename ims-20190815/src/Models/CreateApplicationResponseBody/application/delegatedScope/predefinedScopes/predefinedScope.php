<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\CreateApplicationResponseBody\application\delegatedScope\predefinedScopes;

use AlibabaCloud\Tea\Model;

class predefinedScope extends Model
{
    /**
     * @description The description of the permission scope.
     *
     * @example Obtain the OpenID of the user. This is the default permission that you cannot remove.
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the scope.
     *
     * @example openid
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'Description',
        'name'        => 'Name',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return predefinedScope
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

        return $model;
    }
}

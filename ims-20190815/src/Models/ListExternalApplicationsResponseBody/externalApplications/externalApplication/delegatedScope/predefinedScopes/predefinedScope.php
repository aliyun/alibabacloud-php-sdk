<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListExternalApplicationsResponseBody\externalApplications\externalApplication\delegatedScope\predefinedScopes;

use AlibabaCloud\Tea\Model;

class predefinedScope extends Model
{
    /**
     * @description The description of the permission.
     *
     * @example Obtains the OpenID of the user. This is the default scope and cannot be deleted.
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the permission.
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

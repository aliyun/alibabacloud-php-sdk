<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListAuthorityResponseBody\authorityList\authority\actionList;

use AlibabaCloud\Tea\Model;

class action extends Model
{
    /**
     * @description The code of the permission.
     *
     * @example 1
     *
     * @var string
     */
    public $code;

    /**
     * @description The description of the permission.
     *
     * @example Create an application
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the permission group.
     *
     * @example 1
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the permission.
     *
     * @example Create an application
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'code'        => 'Code',
        'description' => 'Description',
        'groupId'     => 'GroupId',
        'name'        => 'Name',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return action
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}

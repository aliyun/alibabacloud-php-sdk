<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListRoleResponseBody\roleList\roleItem\actionList;

use AlibabaCloud\Tea\Model;

class action extends Model
{
    /**
     * @description The serial number of the permission that is granted to the role.
     *
     * @example 1
     *
     * @var string
     */
    public $code;

    /**
     * @description The description of the permission to be granted to the role.
     *
     * @example Operations in operation records
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the permission group to which the permission that is granted to the role belongs.
     *
     * @example 31
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the permission to be granted to the role.
     *
     * @example Operation records
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

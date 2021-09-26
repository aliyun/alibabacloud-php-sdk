<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeRuleCategoryResponseBody\ruleList;

use AlibabaCloud\Tea\Model;

class childList extends Model
{
    /**
     * @var string
     */
    public $parentId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'parentId' => 'ParentId',
        'groupId'  => 'GroupId',
        'name'     => 'Name',
        'id'       => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return childList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListAuthorityResponseBody\authorityList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListAuthorityResponseBody\authorityList\authority\actionList;

class authority extends Model
{
    /**
     * @var actionList
     */
    public $actionList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'actionList' => 'ActionList',
        'description' => 'Description',
        'groupId' => 'GroupId',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (null !== $this->actionList) {
            $this->actionList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionList) {
            $res['ActionList'] = null !== $this->actionList ? $this->actionList->toArray($noStream) : $this->actionList;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionList'])) {
            $model->actionList = actionList::fromMap($map['ActionList']);
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

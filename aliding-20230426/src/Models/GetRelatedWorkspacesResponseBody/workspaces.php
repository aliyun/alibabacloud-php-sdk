<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetRelatedWorkspacesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetRelatedWorkspacesResponseBody\workspaces\recentList;

class workspaces extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var recentList[]
     */
    public $recentList;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'deleted' => 'Deleted',
        'name' => 'Name',
        'owner' => 'Owner',
        'recentList' => 'RecentList',
        'role' => 'Role',
        'url' => 'Url',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->recentList)) {
            Model::validateArray($this->recentList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->recentList) {
            if (\is_array($this->recentList)) {
                $res['RecentList'] = [];
                $n1 = 0;
                foreach ($this->recentList as $item1) {
                    $res['RecentList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['RecentList'])) {
            if (!empty($map['RecentList'])) {
                $model->recentList = [];
                $n1 = 0;
                foreach ($map['RecentList'] as $item1) {
                    $model->recentList[$n1++] = recentList::fromMap($item1);
                }
            }
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}

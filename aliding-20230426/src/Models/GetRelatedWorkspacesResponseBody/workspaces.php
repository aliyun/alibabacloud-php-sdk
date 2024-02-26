<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetRelatedWorkspacesResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetRelatedWorkspacesResponseBody\workspaces\recentList;
use AlibabaCloud\Tea\Model;

class workspaces extends Model
{
    /**
     * @example 1638256965936
     *
     * @var int
     */
    public $createTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $deleted;

    /**
     * @example 知识库
     *
     * @var string
     */
    public $name;

    /**
     * @example Q2xwPOKiSLxxxx
     *
     * @var string
     */
    public $owner;

    /**
     * @var recentList[]
     */
    public $recentList;

    /**
     * @example OWNER
     *
     * @var string
     */
    public $role;

    /**
     * @example https://alidocs.xxxx/nb9XJKdxxxxmyAp/docs/nb9XxxxxxxmyAp
     *
     * @var string
     */
    public $url;

    /**
     * @example nb9XJKdxxxxmyAp
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'deleted'     => 'Deleted',
        'name'        => 'Name',
        'owner'       => 'Owner',
        'recentList'  => 'RecentList',
        'role'        => 'Role',
        'url'         => 'Url',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['RecentList'] = [];
            if (null !== $this->recentList && \is_array($this->recentList)) {
                $n = 0;
                foreach ($this->recentList as $item) {
                    $res['RecentList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return workspaces
     */
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
                $n                 = 0;
                foreach ($map['RecentList'] as $item) {
                    $model->recentList[$n++] = null !== $item ? recentList::fromMap($item) : $item;
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

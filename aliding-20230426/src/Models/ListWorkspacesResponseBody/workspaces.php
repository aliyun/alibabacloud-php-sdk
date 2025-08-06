<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListWorkspacesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListWorkspacesResponseBody\workspaces\icon;

class workspaces extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $cover;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var icon
     */
    public $icon;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $modifierId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $permissionRole;

    /**
     * @var string
     */
    public $rootNodeId;

    /**
     * @var string
     */
    public $teamId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'corpId' => 'CorpId',
        'cover' => 'Cover',
        'createTime' => 'CreateTime',
        'creatorId' => 'CreatorId',
        'description' => 'Description',
        'icon' => 'Icon',
        'modifiedTime' => 'ModifiedTime',
        'modifierId' => 'ModifierId',
        'name' => 'Name',
        'permissionRole' => 'PermissionRole',
        'rootNodeId' => 'RootNodeId',
        'teamId' => 'TeamId',
        'type' => 'Type',
        'url' => 'Url',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->icon) {
            $this->icon->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }

        if (null !== $this->cover) {
            $res['Cover'] = $this->cover;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->icon) {
            $res['Icon'] = null !== $this->icon ? $this->icon->toArray($noStream) : $this->icon;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->modifierId) {
            $res['ModifierId'] = $this->modifierId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->permissionRole) {
            $res['PermissionRole'] = $this->permissionRole;
        }

        if (null !== $this->rootNodeId) {
            $res['RootNodeId'] = $this->rootNodeId;
        }

        if (null !== $this->teamId) {
            $res['TeamId'] = $this->teamId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }

        if (isset($map['Cover'])) {
            $model->cover = $map['Cover'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Icon'])) {
            $model->icon = icon::fromMap($map['Icon']);
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        if (isset($map['ModifierId'])) {
            $model->modifierId = $map['ModifierId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PermissionRole'])) {
            $model->permissionRole = $map['PermissionRole'];
        }

        if (isset($map['RootNodeId'])) {
            $model->rootNodeId = $map['RootNodeId'];
        }

        if (isset($map['TeamId'])) {
            $model->teamId = $map['TeamId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodeByUrlResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetNodeByUrlResponseBody\node\statisticalInfo;

class node extends Model
{
    /**
     * @var string
     */
    public $category;
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
    public $extension;
    /**
     * @var bool
     */
    public $hasChildren;
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
    public $nodeId;
    /**
     * @var string
     */
    public $permissionRole;
    /**
     * @var int
     */
    public $size;
    /**
     * @var statisticalInfo
     */
    public $statisticalInfo;
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
        'category'        => 'Category',
        'createTime'      => 'CreateTime',
        'creatorId'       => 'CreatorId',
        'extension'       => 'Extension',
        'hasChildren'     => 'HasChildren',
        'modifiedTime'    => 'ModifiedTime',
        'modifierId'      => 'ModifierId',
        'name'            => 'Name',
        'nodeId'          => 'NodeId',
        'permissionRole'  => 'PermissionRole',
        'size'            => 'Size',
        'statisticalInfo' => 'StatisticalInfo',
        'type'            => 'Type',
        'url'             => 'Url',
        'workspaceId'     => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->statisticalInfo) {
            $this->statisticalInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }

        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }

        if (null !== $this->hasChildren) {
            $res['HasChildren'] = $this->hasChildren;
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

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->permissionRole) {
            $res['PermissionRole'] = $this->permissionRole;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->statisticalInfo) {
            $res['StatisticalInfo'] = null !== $this->statisticalInfo ? $this->statisticalInfo->toArray($noStream) : $this->statisticalInfo;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }

        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }

        if (isset($map['HasChildren'])) {
            $model->hasChildren = $map['HasChildren'];
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

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['PermissionRole'])) {
            $model->permissionRole = $map['PermissionRole'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['StatisticalInfo'])) {
            $model->statisticalInfo = statisticalInfo::fromMap($map['StatisticalInfo']);
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

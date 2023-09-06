<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListNodesResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\ListNodesResponseBody\nodes\statisticalInfo;
use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @example ALIDOC
     *
     * @var string
     */
    public $category;

    /**
     * @example 2023-05-15T11:29Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 01472825524039877041
     *
     * @var string
     */
    public $creatorId;

    /**
     * @example adoc
     *
     * @var string
     */
    public $extension;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasChildren;

    /**
     * @example 2023-05-15T11:29Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example 01472825524039877041
     *
     * @var string
     */
    public $modifierId;

    /**
     * @example node_name
     *
     * @var string
     */
    public $name;

    /**
     * @example MNDoBb60VLBPraakI1Ywxyyn8lemrZQ3
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example READER
     *
     * @var string
     */
    public $permissionRole;

    /**
     * @example 512
     *
     * @var int
     */
    public $size;

    /**
     * @var statisticalInfo
     */
    public $statisticalInfo;

    /**
     * @example FILE
     *
     * @var string
     */
    public $type;

    /**
     * @example node_url
     *
     * @var string
     */
    public $url;

    /**
     * @example MNDoBb60VLBPraakI1Ywxyyn8lemrZQ3
     *
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
    }

    public function toMap()
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
            $res['StatisticalInfo'] = null !== $this->statisticalInfo ? $this->statisticalInfo->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return nodes
     */
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

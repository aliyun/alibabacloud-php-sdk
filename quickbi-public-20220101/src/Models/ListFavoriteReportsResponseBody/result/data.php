<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListFavoriteReportsResponseBody\result;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $favorite;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var bool
     */
    public $hasEditAuth;

    /**
     * @var bool
     */
    public $hasViewAuth;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var string
     */
    public $ownerNum;

    /**
     * @var int
     */
    public $publishStatus;

    /**
     * @var string
     */
    public $treeId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'favorite'      => 'Favorite',
        'gmtCreate'     => 'GmtCreate',
        'gmtModified'   => 'GmtModified',
        'hasEditAuth'   => 'HasEditAuth',
        'hasViewAuth'   => 'HasViewAuth',
        'name'          => 'Name',
        'ownerName'     => 'OwnerName',
        'ownerNum'      => 'OwnerNum',
        'publishStatus' => 'PublishStatus',
        'treeId'        => 'TreeId',
        'type'          => 'Type',
        'workspaceId'   => 'WorkspaceId',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->favorite) {
            $res['Favorite'] = $this->favorite;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->hasEditAuth) {
            $res['HasEditAuth'] = $this->hasEditAuth;
        }
        if (null !== $this->hasViewAuth) {
            $res['HasViewAuth'] = $this->hasViewAuth;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->ownerNum) {
            $res['OwnerNum'] = $this->ownerNum;
        }
        if (null !== $this->publishStatus) {
            $res['PublishStatus'] = $this->publishStatus;
        }
        if (null !== $this->treeId) {
            $res['TreeId'] = $this->treeId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }
        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Favorite'])) {
            $model->favorite = $map['Favorite'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['HasEditAuth'])) {
            $model->hasEditAuth = $map['HasEditAuth'];
        }
        if (isset($map['HasViewAuth'])) {
            $model->hasViewAuth = $map['HasViewAuth'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['OwnerNum'])) {
            $model->ownerNum = $map['OwnerNum'];
        }
        if (isset($map['PublishStatus'])) {
            $model->publishStatus = $map['PublishStatus'];
        }
        if (isset($map['TreeId'])) {
            $model->treeId = $map['TreeId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }
        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        return $model;
    }
}

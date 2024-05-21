<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListFavoriteReportsResponseBody\result;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $favorite;

    /**
     * @var string
     */
    public $favoriteDate;

    /**
     * @example 1640088615000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 1640595729000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasEditAuth;

    /**
     * @example true
     *
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
     * @example 1365*****238860
     *
     * @var string
     */
    public $ownerNum;

    /**
     * @example 1
     *
     * @var int
     */
    public $publishStatus;

    /**
     * @example 977c7698-****-****-****-44b7304d20fc
     *
     * @var string
     */
    public $treeId;

    /**
     * @example PAGE
     *
     * @var string
     */
    public $type;

    /**
     * @example 523793cb-****-****-****-aa71c65ffa39
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'favorite'      => 'Favorite',
        'favoriteDate'  => 'FavoriteDate',
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
        if (null !== $this->favoriteDate) {
            $res['FavoriteDate'] = $this->favoriteDate;
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
        if (isset($map['FavoriteDate'])) {
            $model->favoriteDate = $map['FavoriteDate'];
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

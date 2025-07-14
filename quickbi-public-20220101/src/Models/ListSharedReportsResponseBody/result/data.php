<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListSharedReportsResponseBody\result;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Queries whether the user has collected the work.
     *
     * @example true
     *
     * @var bool
     */
    public $favorite;

    /**
     * @description The timestamp when the work was created.
     *
     * @example 1640088615000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The timestamp when the work was modified.
     *
     * @example 1644373980000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The query user has the editing rights of the work.
     *
     * @example true
     *
     * @var bool
     */
    public $hasEditAuth;

    /**
     * @description The query user has the permission to view the work.
     *
     * @example true
     *
     * @var bool
     */
    public $hasViewAuth;

    /**
     * @description The name of the work.
     *
     * @example Test report
     *
     * @var string
     */
    public $name;

    /**
     * @description The Alibaba Cloud account name of the work owner.
     *
     * @example test account
     *
     * @var string
     */
    public $ownerName;

    /**
     * @description The UserID of the work owner.
     *
     * @example 1365*****238860
     *
     * @var string
     */
    public $ownerNum;

    /**
     * @description The publication status of the work. Valid values:
     *
     *   0: unpublished
     *   1: published
     *   2: modified and saved but not published.
     *   3: unpublished
     *
     * @example 1
     *
     * @var int
     */
    public $publishStatus;

    /**
     * @description The ID of the work.
     *
     * @example 977c7698-****-****-****-44b7304d20fc
     *
     * @var string
     */
    public $treeId;

    /**
     * @description The type of the work. Valid values:
     *
     *   DATAPRODUCT: BI portal
     *   PAGE: Dashboard
     *   REPORT: workbook
     *
     * @example PAGE
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the workspace to which the work belongs.
     *
     * @example gfidm145-****-****-9426-8f93be23****
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @description The name of the workspace to which the work belongs.
     *
     * @example Test Workspace
     *
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'favorite' => 'Favorite',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'hasEditAuth' => 'HasEditAuth',
        'hasViewAuth' => 'HasViewAuth',
        'name' => 'Name',
        'ownerName' => 'OwnerName',
        'ownerNum' => 'OwnerNum',
        'publishStatus' => 'PublishStatus',
        'treeId' => 'TreeId',
        'type' => 'Type',
        'workspaceId' => 'WorkspaceId',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate() {}

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

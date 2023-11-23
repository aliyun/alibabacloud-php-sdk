<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class ResourceGroup extends Model
{
    /**
     * @var string
     */
    public $creatorID;

    /**
     * @var string
     */
    public $gmtCreatedTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example RG1
     *
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $nodeCount;

    /**
     * @example rg17tmvwiokhzaxg
     *
     * @var string
     */
    public $resourceGroupID;

    /**
     * @var UserVpc
     */
    public $userVpc;

    /**
     * @example 23000
     *
     * @var string
     */
    public $workspaceID;
    protected $_name = [
        'creatorID'       => 'CreatorID',
        'gmtCreatedTime'  => 'GmtCreatedTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'name'            => 'Name',
        'nodeCount'       => 'NodeCount',
        'resourceGroupID' => 'ResourceGroupID',
        'userVpc'         => 'UserVpc',
        'workspaceID'     => 'WorkspaceID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatorID) {
            $res['CreatorID'] = $this->creatorID;
        }
        if (null !== $this->gmtCreatedTime) {
            $res['GmtCreatedTime'] = $this->gmtCreatedTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = $this->nodeCount;
        }
        if (null !== $this->resourceGroupID) {
            $res['ResourceGroupID'] = $this->resourceGroupID;
        }
        if (null !== $this->userVpc) {
            $res['UserVpc'] = null !== $this->userVpc ? $this->userVpc->toMap() : null;
        }
        if (null !== $this->workspaceID) {
            $res['WorkspaceID'] = $this->workspaceID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResourceGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatorID'])) {
            $model->creatorID = $map['CreatorID'];
        }
        if (isset($map['GmtCreatedTime'])) {
            $model->gmtCreatedTime = $map['GmtCreatedTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NodeCount'])) {
            $model->nodeCount = $map['NodeCount'];
        }
        if (isset($map['ResourceGroupID'])) {
            $model->resourceGroupID = $map['ResourceGroupID'];
        }
        if (isset($map['UserVpc'])) {
            $model->userVpc = UserVpc::fromMap($map['UserVpc']);
        }
        if (isset($map['WorkspaceID'])) {
            $model->workspaceID = $map['WorkspaceID'];
        }

        return $model;
    }
}

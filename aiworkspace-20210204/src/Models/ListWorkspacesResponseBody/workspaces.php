<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListWorkspacesResponseBody;

use AlibabaCloud\Tea\Model;

class workspaces extends Model
{
    /**
     * @var string[]
     */
    public $adminNames;

    /**
     * @example 122424353535
     *
     * @var string
     */
    public $creator;

    /**
     * @example workspace description example
     *
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $envTypes;

    /**
     * @example {"TenantId": "4286******98"}
     *
     * @var mixed[]
     */
    public $extraInfos;

    /**
     * @example 2021-01-21T17:12:35.232Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2021-01-21T17:12:35.232Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @example ENABLED
     *
     * @var string
     */
    public $status;

    /**
     * @example 123
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @example workspace-example
     *
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'adminNames'      => 'AdminNames',
        'creator'         => 'Creator',
        'description'     => 'Description',
        'envTypes'        => 'EnvTypes',
        'extraInfos'      => 'ExtraInfos',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'isDefault'       => 'IsDefault',
        'status'          => 'Status',
        'workspaceId'     => 'WorkspaceId',
        'workspaceName'   => 'WorkspaceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adminNames) {
            $res['AdminNames'] = $this->adminNames;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->envTypes) {
            $res['EnvTypes'] = $this->envTypes;
        }
        if (null !== $this->extraInfos) {
            $res['ExtraInfos'] = $this->extraInfos;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
     * @return workspaces
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdminNames'])) {
            if (!empty($map['AdminNames'])) {
                $model->adminNames = $map['AdminNames'];
            }
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnvTypes'])) {
            if (!empty($map['EnvTypes'])) {
                $model->envTypes = $map['EnvTypes'];
            }
        }
        if (isset($map['ExtraInfos'])) {
            $model->extraInfos = $map['ExtraInfos'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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

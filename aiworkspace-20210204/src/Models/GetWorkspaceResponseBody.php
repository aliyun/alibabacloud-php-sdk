<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetWorkspaceResponseBody\owner;
use AlibabaCloud\Tea\Model;

class GetWorkspaceResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $adminNames;

    /**
     * @example 1157******94123
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
     * @example workspace-example
     *
     * @var string
     */
    public $displayName;

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
     * @example true
     *
     * @var bool
     */
    public $isDefault;

    /**
     * @var owner
     */
    public $owner;

    /**
     * @example A0F049F0-8D69-5BAC-8F10-B4DED1B5A34C
     *
     * @var string
     */
    public $requestId;

    /**
     * @example ENABLED
     *
     * @var string
     */
    public $status;

    /**
     * @example 1234
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
        'displayName'     => 'DisplayName',
        'envTypes'        => 'EnvTypes',
        'extraInfos'      => 'ExtraInfos',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'isDefault'       => 'IsDefault',
        'owner'           => 'Owner',
        'requestId'       => 'RequestId',
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
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
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
        if (null !== $this->owner) {
            $res['Owner'] = null !== $this->owner ? $this->owner->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return GetWorkspaceResponseBody
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
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
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
        if (isset($map['Owner'])) {
            $model->owner = owner::fromMap($map['Owner']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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

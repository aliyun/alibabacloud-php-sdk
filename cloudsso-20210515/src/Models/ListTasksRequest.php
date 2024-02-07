<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class ListTasksRequest extends Model
{
    /**
     * @description The ID of the access configuration. The ID can be used to filter access permissions.
     *
     * @example ac-00jhtfl8thteu6uj****
     *
     * @var string
     */
    public $accessConfigurationId;

    /**
     * @description The ID of the directory.
     *
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The filter condition.
     *
     * >  If you do not specify this parameter, the operation queries the tasks within the previous 24 hours by default.
     * @example StartTime ge 2021-03-15T01:12:23Z
     *
     * @var string
     */
    public $filter;

    /**
     * @description The maximum number of entries per page.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. If this is your first time to call this operation, you do not need to specify the `NextToken` parameter.
     *
     * When you call this operation for the first time, if the total number of entries to return exceeds the value of `MaxResults`, the entries are truncated. Only the entries that match the value of `MaxResults` are returned, and the excess entries are not returned. In this case, the value of the response parameter `IsTruncated` is `true`, and `NextToken` is returned. In the next call, you can use the value of `NextToken` and maintain the settings of the other request parameters to query the excess entries. You can repeat the call until the value of `IsTruncated` becomes `false`. This way, all entries are returned.
     * @example K1c3o9K7pFxoTtxH1Nm7MMLb7zrDGvftYBQBPDVv7AD3a8yhRb3Mk8L9ivmN6bFSjfkZNTAg3h4****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the CloudSSO identity. The ID can be used to filter access permissions.
     *
     *   If you set `PrincipalType` to `User`, set `PrincipalId` to the ID of the CloudSSO user.
     *   If you set `PrincipalType` to `Group`, set `PrincipalId` to the ID of the CloudSSO group.
     *
     * >  You can use the type to filter access permissions only if you specify both `PrincipalId` and `PrincipalType`.
     * @example u-00q8wbq42wiltcrk****
     *
     * @var string
     */
    public $principalId;

    /**
     * @description The type of the CloudSSO identity. The type can be used to filter access permissions. Valid values:
     *
     *   User
     *   Group
     *
     * >  You can use the type to filter access permissions only if you specify both `PrincipalId` and `PrincipalType`.
     * @example User
     *
     * @var string
     */
    public $principalType;

    /**
     * @description The ID of the task. The ID can be used to filter tasks. Valid values:
     *
     *   InProgress: The task is running.
     *   Success: The task is successful.
     *   Failed: The task failed.
     *
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the task object. The ID can be used to filter access permissions.
     *
     * >  You can use the type to filter access permissions only if you specify both `TargetId` and `TargetType`.
     * @example 114240524784****
     *
     * @var string
     */
    public $targetId;

    /**
     * @description The type of the task object. The type can be used to filter access permissions.
     *
     * >  You can use the type to filter access permissions only if you specify both `TargetId` and `TargetType`.
     * @example RD-Account
     *
     * @var string
     */
    public $targetType;

    /**
     * @description The type of the task. The type can be used to filter tasks. Valid values:
     *
     *   ProvisionAccessConfiguration: An access configuration is provisioned.
     *   DeprovisionAccessConfiguration: An access configuration is de-provisioned.
     *   CreateAccessAssignment: Access permissions on an account in the resource directory are assigned.
     *   DeleteAccessAssignment: Access permissions on an account in the resource directory are removed.
     *
     * @example CreateAccessAssignment
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'accessConfigurationId' => 'AccessConfigurationId',
        'directoryId'           => 'DirectoryId',
        'filter'                => 'Filter',
        'maxResults'            => 'MaxResults',
        'nextToken'             => 'NextToken',
        'principalId'           => 'PrincipalId',
        'principalType'         => 'PrincipalType',
        'status'                => 'Status',
        'targetId'              => 'TargetId',
        'targetType'            => 'TargetType',
        'taskType'              => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessConfigurationId) {
            $res['AccessConfigurationId'] = $this->accessConfigurationId;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->principalId) {
            $res['PrincipalId'] = $this->principalId;
        }
        if (null !== $this->principalType) {
            $res['PrincipalType'] = $this->principalType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessConfigurationId'])) {
            $model->accessConfigurationId = $map['AccessConfigurationId'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PrincipalId'])) {
            $model->principalId = $map['PrincipalId'];
        }
        if (isset($map['PrincipalType'])) {
            $model->principalType = $map['PrincipalType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}

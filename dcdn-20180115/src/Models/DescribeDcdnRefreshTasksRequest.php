<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnRefreshTasksRequest extends Model
{
    /**
     * @description The accelerated domain name. You can specify only one domain name in each request.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * > The end time must be later than the start time.
     * @example 2017-01-01T12:13:20Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The path of the object. The path is used as a condition for exact matching.
     *
     * @example http://example.com/examplefile.txt
     *
     * @var string
     */
    public $objectPath;

    /**
     * @description The type of the task.
     *
     *   **file**: URL-based refresh
     *   **directory**: directory-based refresh
     *   **preload**: URL-based prefetch
     *
     * If you set **DomainName** or **Status**, you must also set this parameter.
     * @example file
     *
     * @var string
     */
    public $objectType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return. Valid values: **1** to **100000**.
     *
     * @example 2
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: **20**. Maximum value: **50**. Valid values: **1** to **50**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2017-01-01T12:12:20Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the task.
     *
     *   **Complete**: The task is complete.
     *   **Refreshing**: The task is in progress.
     *   **Failed**: The task failed.
     *
     * @example Complete
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the task. A task ID is assigned when you create a refresh or prefetch task.
     *
     * @example 704225667
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'domainName'    => 'DomainName',
        'endTime'       => 'EndTime',
        'objectPath'    => 'ObjectPath',
        'objectType'    => 'ObjectType',
        'ownerId'       => 'OwnerId',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'securityToken' => 'SecurityToken',
        'startTime'     => 'StartTime',
        'status'        => 'Status',
        'taskId'        => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->objectPath) {
            $res['ObjectPath'] = $this->objectPath;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnRefreshTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ObjectPath'])) {
            $model->objectPath = $map['ObjectPath'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}

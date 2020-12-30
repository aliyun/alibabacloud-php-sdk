<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodRefreshTasksRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $objectPath;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;
    protected $_name = [
        'ownerId'       => 'OwnerId',
        'securityToken' => 'SecurityToken',
        'taskId'        => 'TaskId',
        'objectPath'    => 'ObjectPath',
        'pageNumber'    => 'PageNumber',
        'objectType'    => 'ObjectType',
        'domainName'    => 'DomainName',
        'status'        => 'Status',
        'pageSize'      => 'PageSize',
        'startTime'     => 'StartTime',
        'endTime'       => 'EndTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->objectPath) {
            $res['ObjectPath'] = $this->objectPath;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVodRefreshTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['ObjectPath'])) {
            $model->objectPath = $map['ObjectPath'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        return $model;
    }
}

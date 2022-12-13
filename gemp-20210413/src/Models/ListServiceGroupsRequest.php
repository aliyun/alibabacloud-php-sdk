<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListServiceGroupsRequest extends Model
{
    /**
     * @example C4BE3837-1A13-413B-A225-2C88188E8A43
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example false
     *
     * @var bool
     */
    public $isScheduled;

    /**
     * @example false
     *
     * @var bool
     */
    public $orderByScheduleStatus;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 王宇
     *
     * @var string
     */
    public $queryName;

    /**
     * @example USER
     *
     * @var string
     */
    public $queryType;

    /**
     * @example 100000
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'clientToken'           => 'clientToken',
        'isScheduled'           => 'isScheduled',
        'orderByScheduleStatus' => 'orderByScheduleStatus',
        'pageNumber'            => 'pageNumber',
        'pageSize'              => 'pageSize',
        'queryName'             => 'queryName',
        'queryType'             => 'queryType',
        'userId'                => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->isScheduled) {
            $res['isScheduled'] = $this->isScheduled;
        }
        if (null !== $this->orderByScheduleStatus) {
            $res['orderByScheduleStatus'] = $this->orderByScheduleStatus;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->queryName) {
            $res['queryName'] = $this->queryName;
        }
        if (null !== $this->queryType) {
            $res['queryType'] = $this->queryType;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['isScheduled'])) {
            $model->isScheduled = $map['isScheduled'];
        }
        if (isset($map['orderByScheduleStatus'])) {
            $model->orderByScheduleStatus = $map['orderByScheduleStatus'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['queryName'])) {
            $model->queryName = $map['queryName'];
        }
        if (isset($map['queryType'])) {
            $model->queryType = $map['queryType'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}

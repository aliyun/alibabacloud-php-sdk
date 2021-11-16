<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListServiceGroupsRequest extends Model
{
    /**
     * @description 幂等号
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 是否已经排班
     *
     * @var bool
     */
    public $isScheduled;

    /**
     * @description 是否根据排班状态排序
     *
     * @var bool
     */
    public $orderByScheduleStatus;

    /**
     * @description 当前页
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 页大小
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 搜索名称
     *
     * @var string
     */
    public $queryName;

    /**
     * @description 搜索类型。USER用户 SERVICEGROUP服务组
     *
     * @var string
     */
    public $queryType;

    /**
     * @description 用户ID
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

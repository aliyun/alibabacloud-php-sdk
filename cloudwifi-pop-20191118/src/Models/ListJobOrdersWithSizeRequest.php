<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Dara\Model;

class ListJobOrdersWithSizeRequest extends Model
{
    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $changingType;

    /**
     * @var string
     */
    public $clientSystem;

    /**
     * @var string
     */
    public $clientUniqueId;

    /**
     * @var int
     */
    public $cursor;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $handler;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $orderStatus;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'appCode' => 'AppCode',
        'appName' => 'AppName',
        'changingType' => 'ChangingType',
        'clientSystem' => 'ClientSystem',
        'clientUniqueId' => 'ClientUniqueId',
        'cursor' => 'Cursor',
        'endTime' => 'EndTime',
        'handler' => 'Handler',
        'id' => 'Id',
        'orderStatus' => 'OrderStatus',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->changingType) {
            $res['ChangingType'] = $this->changingType;
        }

        if (null !== $this->clientSystem) {
            $res['ClientSystem'] = $this->clientSystem;
        }

        if (null !== $this->clientUniqueId) {
            $res['ClientUniqueId'] = $this->clientUniqueId;
        }

        if (null !== $this->cursor) {
            $res['Cursor'] = $this->cursor;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->handler) {
            $res['Handler'] = $this->handler;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['ChangingType'])) {
            $model->changingType = $map['ChangingType'];
        }

        if (isset($map['ClientSystem'])) {
            $model->clientSystem = $map['ClientSystem'];
        }

        if (isset($map['ClientUniqueId'])) {
            $model->clientUniqueId = $map['ClientUniqueId'];
        }

        if (isset($map['Cursor'])) {
            $model->cursor = $map['Cursor'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Handler'])) {
            $model->handler = $map['Handler'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryDynamicGroupDevicesRequest extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example true
     *
     * @var bool
     */
    public $fuzzyName;

    /**
     * @example tDQvBJqbUyHs***
     *
     * @var string
     */
    public $groupId;

    /**
     * @example iot-***-v6***
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example TGlzdFJlc291***
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example a1BwAGV***
     *
     * @var string
     */
    public $productKey;

    /**
     * @example OFFLINE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'currentPage'   => 'CurrentPage',
        'deviceName'    => 'DeviceName',
        'fuzzyName'     => 'FuzzyName',
        'groupId'       => 'GroupId',
        'iotInstanceId' => 'IotInstanceId',
        'nextToken'     => 'NextToken',
        'pageSize'      => 'PageSize',
        'productKey'    => 'ProductKey',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->fuzzyName) {
            $res['FuzzyName'] = $this->fuzzyName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDynamicGroupDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['FuzzyName'])) {
            $model->fuzzyName = $map['FuzzyName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

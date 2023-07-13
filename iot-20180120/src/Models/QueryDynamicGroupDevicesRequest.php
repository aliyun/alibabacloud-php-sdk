<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryDynamicGroupDevicesRequest extends Model
{
    /**
     * @description The page number. Default value: 1.
     *
     * @example 2
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The DeviceName of the device.
     *
     * If you specify this parameter and set **FuzzyName** to **true**, the value you specified is used as the prefix to fuzzy match the DeviceName. The value must be at least 4 characters in length.
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description Specifies whether to fuzzy match devices by the value of the **DeviceName** parameter. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example true
     *
     * @var bool
     */
    public $fuzzyName;

    /**
     * @description The ID of the group. The ID is the globally unique identifier (GUID) for the group.
     *
     * You can call the [QueryDeviceGroupList](~~93356~~) operation to query the **GroupId** parameter.
     * @example tDQvBJqbUyHs***
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The instance ID. You can view the **ID** of the instance on the **Overview** page in the IoT Platform console.
     *
     * @example iot-***-v6***
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request.
     *
     * @example TGlzdFJlc291***
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The number of entries per page. Valid values: 1 to 200. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The **ProductKey** of the product to which the devices belong.
     *
     * @example a1BwAGV***
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The device status. Valid values:
     *
     *   **ONLINE**: The device is online.
     *   **OFFLINE**: The device is offline.
     *   **UNACTIVE**: The device is not activated.
     *   **DISABLE**: The device is deactivated.
     *
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

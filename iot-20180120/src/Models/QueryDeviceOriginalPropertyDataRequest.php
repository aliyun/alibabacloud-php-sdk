<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryDeviceOriginalPropertyDataRequest extends Model
{
    /**
     * @description The order in which you want to sort the returned property records. Valid values:
     *
     *   0: descending.
     *   1: ascending.
     *
     * >  The **start time** must be earlier than the **end time**. The system sorts the returned records based on the specified order.
     * @example 0
     *
     * @var int
     */
    public $asc;

    /**
     * @description The DeviceName of the device.
     *
     * > If you specify a value for this parameter, you must configure the **ProductKey** parameter.
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The end of the time range to query. The value must be a 13-digit timestamp.
     *
     * @example 1579249499000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The identifier of the property.
     *
     *   If weak verification is used, you can perform the following steps to view the **Identifier** of a device property: Log on to the IoT Platform console and go to the Define Feature tab of the Product Details page. You can also call the [QueryThingModel](~~150321~~) operation and view the property identifier in the returned TSL data.
     *   If no verification is used, the value must be the same as the custom **identifier** that is submitted by the device.
     *
     * @example temperature
     *
     * @var string
     */
    public $identifier;

    /**
     * @description The ID of the device. The ID is a unique identifier that is issued by IoT Platform to the device.
     *
     * > The IotId parameter specifies a unique ID for the device. The value of the **IotId** parameter is equivalent to a combination of the values of the **ProductKey** and **DeviceName.N** parameters. If you specify the IotId parameter, you do not need to configure the **ProductKey** or **DeviceName.N** parameter. If you specify values for the **IotId**, **ProductKey**, and **DeviceName.N** parameters, the value of the **IotId** parameter takes precedence.
     * @example Q7uOhVRdZRRlDnTLv****00100
     *
     * @var string
     */
    public $iotId;

    /**
     * @description The ID of the instance. You can view the ID of the instance on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must specify the ID for this parameter. Otherwise, the call fails.****
     * >*   If no **Overview** page or **ID** is generated for your instance, you do not need to configure this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The token that is used to retrieve the next page of the query results. If the next page exists, this parameter is returned. In this case, you must add the value of the parameter to the next request.
     *
     * @example Bo***x44Qx
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @description The maximum number of records that can be returned for each property. Maximum value: 100.
     *
     * The number of records that are returned for an arbitrary property cannot exceed the limit.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ProductKey of the product to which the device belongs.****
     *
     *
     *
     * > If you specify a value for this parameter, you must configure the **DeviceName** parameter.
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The start of the time range to query. The value must be a 13-digit timestamp.
     *
     * @example 1569249488000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'asc'           => 'Asc',
        'deviceName'    => 'DeviceName',
        'endTime'       => 'EndTime',
        'identifier'    => 'Identifier',
        'iotId'         => 'IotId',
        'iotInstanceId' => 'IotInstanceId',
        'nextPageToken' => 'NextPageToken',
        'pageSize'      => 'PageSize',
        'productKey'    => 'ProductKey',
        'startTime'     => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asc) {
            $res['Asc'] = $this->asc;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDeviceOriginalPropertyDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Asc'])) {
            $model->asc = $map['Asc'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}

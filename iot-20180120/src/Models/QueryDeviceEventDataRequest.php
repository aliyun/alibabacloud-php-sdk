<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryDeviceEventDataRequest extends Model
{
    /**
     * @description The order in which you want to sort the returned event records. Valid values:
     *
     *   **0**: in reverse chronological order. This is the default value.
     *   **1**: in chronological order.
     *
     * >  If you do not configure this parameter, the default value **0** is used. The system sorts the returned event records in reverse chronological order.
     * @example 0
     *
     * @var int
     */
    public $asc;

    /**
     * @description The DeviceName of the device.
     *
     * >  If you specify a value for this parameter, you must also specify a value for the **ProductKey** parameter.
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The end of the time range to query. The value is a 13-digit timestamp in milliseconds. Example: 1516541900303.
     *
     * @example 1516541900303
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The type of the event that you want to query. Valid values:
     *
     *   **info**: Information.
     *   **alert**: Alert.
     *   **error**: Error.
     *
     * @example info
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The identifier of the event that you want to query. You can view the event identifier on the Define Feature tab of the Product Details page in the IoT Platform console. You can also call the [QueryThingModel](~~150321~~) operation and view the event identifier in the returned TSL data.
     *
     * >  If the PowerOff event belongs to a custom module named testFb, this parameter is set to **testFb:PowerOff**.
     *
     * If you do not specify this parameter, the system queries all event data of the default module and custom modules.
     * @example PowerOff
     *
     * @var string
     */
    public $identifier;

    /**
     * @description The ID of the device. The ID is a unique identifier that is issued by IoT Platform to the device.
     *
     * >  If you specify a value for this parameter, you do not need to specify a value for the **ProductKey** or **DeviceName** parameter. The **IotId** parameter specifies a globally unique identifier (GUID) for the device. The value of the IotId parameter corresponds to a combination of the values of the **ProductKey** and **DeviceName** parameters. If you specify a value for the **IotId** parameter and values for the **ProductKey** and **DeviceName** parameters, the value of the **IotId** parameter takes precedence.
     * @example Q7uOhVRdZRRlDnTLv****00100
     *
     * @var string
     */
    public $iotId;

    /**
     * @description The ID of the instance. You can view the **ID** of the instance on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must specify this parameter. Otherwise, the call fails.
     * >*   If the **Overview** page does not appear in the IoT Platform console or no ID is generated for your instance, you do not need to specify this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 50. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ProductKey of the product to which the device belongs.
     *
     * >  If you specify this parameter, you must also specify the **DeviceName** parameter.
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The beginning of the time range to query. The value is a 13-digit timestamp in milliseconds. Example: 1516538300303.
     *
     * >  You can query the event data only of the most recent 30 days.
     * @example 1516541900303
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'asc'           => 'Asc',
        'deviceName'    => 'DeviceName',
        'endTime'       => 'EndTime',
        'eventType'     => 'EventType',
        'identifier'    => 'Identifier',
        'iotId'         => 'IotId',
        'iotInstanceId' => 'IotInstanceId',
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
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
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
     * @return QueryDeviceEventDataRequest
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
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
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

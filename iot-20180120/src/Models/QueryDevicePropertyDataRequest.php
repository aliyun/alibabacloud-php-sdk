<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryDevicePropertyDataRequest extends Model
{
    /**
     * @description The order in which you want to sort the property records that are returned. Valid values:
     *
     *   **0**: reverse chronological order
     *   **1**: chronological order
     *
     * @example 0
     *
     * @var int
     */
    public $asc;

    /**
     * @description The name of the device.
     *
     * >If you specify a value for this parameter, you must also specify a value for the **ProductKey** parameter.
     * @example airconditioning
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The end of the time range to query. The value of the EndTime parameter must be greater than the value of the **StartTime** parameter. The value is a timestamp in milliseconds, for example, 1579249499000.
     *
     * @example 1579249499000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The identifier of the property that you want to query.
     *
     * You can view the property **identifier** on the Define Feature tab of the Product Details page in the IoT Platform console. You can also call the [QueryThingModel](~~150321~~) operation and view the property identifier in the returned TSL data.
     *
     * >  If a property named temperature belongs to a custom module named testFb, set this parameter to **testFb:temperature**. The custom module is not the default module.
     * @example temperature
     *
     * @var string
     */
    public $identifier;

    /**
     * @description The ID of the device to which the property belongs.:
     *
     * You can call the [QueryDeviceInfo](~~257184~~) operation to query the **ID** of the device.
     *
     * >If you specify a value for this parameter, you do not need to specify a value for the **ProductKey** or **DeviceName** parameter. The **IotId** parameter specifies a globally unique identifier (GUID) for the device. The value of the IotId parameter corresponds to a combination of the values of the **ProductKey** and **DeviceName** parameters. If you specify a value for the **IotId** parameter and values for the **ProductKey** and **DeviceName** parameters, the value of the **IotId** parameter takes precedence.
     * @example Q7uOhVRdZRRlDnTLv****00100
     *
     * @var string
     */
    public $iotId;

    /**
     * @description The ID of the instance. You can view the instance **ID** on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must configure this parameter. If you do not configure this parameter, the call fails.
     *   If your instance has no **Overview** page or ID, you do not need to configure this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot-cn-0pp1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The number of entries to return on each page. Valid values: 1 to 50.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ProductKey of the product to which the device belongs.
     *
     * >If you specify a value for this parameter, you must also specify a value for the **DeviceName** parameter.
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The start of the time range to query. The value of the StartTime parameter must be less than the value of the **EndTime** parameter. The value is a timestamp in milliseconds, for example, 1579249499000.
     *
     * @example 1579249499000
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
     * @return QueryDevicePropertyDataRequest
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

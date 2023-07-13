<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryDeviceServiceDataRequest extends Model
{
    /**
     * @description The sorting order of the returned service call records. Valid values:
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
     * @description The DeviceName of the device.
     *
     * > If you specify a value for this parameter, you must configure the **ProductKey** parameter.
     * @example light
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The end of the time range to query. The value is a Unix timestamp. Unit: milliseconds. Example: 1579249499000.
     *
     * @example 1579249499000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The identifier of the service. The **identifier** of the service that is called. You can view the service identifier on the Define Feature tab in the IoT Platform console. You can also call the [QueryThingModel](~~150321~~) operation to view the service identifier.
     *
     * >  If a service named **testService** belongs to a custom module named **testFb**, you can set this parameter to **testFb:testService**. The custom module is not the default module.
     *
     * If you do not specify a value for this parameter, the system queries all service data of the default module and custom modules.
     * @example Set
     *
     * @var string
     */
    public $identifier;

    /**
     * @description The ID of the device. The ID is a unique identifier that is issued by IoT Platform to the device.
     *
     * > The IotId parameter specifies a GUID for the device. The value of the **IotId** parameter is equivalent to a combination of the values of the **ProductKey** and **DeviceName** parameters. If you specify a value for this parameter, you do not need to configure the **ProductKey** or **DeviceName** parameter. If you specify values for the **IotId**, **ProductKey**, and **DeviceName** parameters, the value of the **IotId** parameter takes precedence.
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
     * >If you specify a value for this parameter, you must configure the **DeviceName** parameter.
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The beginning of the time range to query. The value is a Unix timestamp. Unit: milliseconds. Example: 1579249499000.
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
     * @return QueryDeviceServiceDataRequest
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryLicenseDeviceListRequest extends Model
{
    /**
     * @description The end time of the time range in which the license is bound to the devices.The timestamp follows the UNIX time format. It is the number of seconds that have elapsed since 00:00:00 Thursday, January 1, 1970.
     *
     * @example 1620934297000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The ID of the device.
     *
     * You can call the [QueryDevice](~~69905~~) operation to query the **IotId** values of all devices that belong to a specific product.
     * @example Q7uOhVRdZRRlDnTLv****00100
     *
     * @var string
     */
    public $iotId;

    /**
     * @description The instance ID. You can view the **ID** of the instance on the **Overview** page in the IoT Platform console.
     *
     * For more information, see the [Overview](~~356505~~) topic of IoT instances.
     * @example iot-ws4***
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The license type that specifies the audio and video specifications. Valid values: **480P** and **720P**.
     *
     * @example 720P
     *
     * @var string
     */
    public $licenseCode;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageId;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 20.
     *
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The **ProductKey** of the product to which the devices belong.
     *
     * You can go to the IoT Platform console or call the [QueryProductList](~~69271~~) operation to view the information about all products of the instance.
     * @example es****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The start time of the time range in which the license is bound to the devices. The timestamp follows the UNIX time format. It is the number of seconds that have elapsed since 00:00:00 Thursday, January 1, 1970.
     *
     * @example 1620634297000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'       => 'EndTime',
        'iotId'         => 'IotId',
        'iotInstanceId' => 'IotInstanceId',
        'licenseCode'   => 'LicenseCode',
        'pageId'        => 'PageId',
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
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->licenseCode) {
            $res['LicenseCode'] = $this->licenseCode;
        }
        if (null !== $this->pageId) {
            $res['PageId'] = $this->pageId;
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
     * @return QueryLicenseDeviceListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['LicenseCode'])) {
            $model->licenseCode = $map['LicenseCode'];
        }
        if (isset($map['PageId'])) {
            $model->pageId = $map['PageId'];
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

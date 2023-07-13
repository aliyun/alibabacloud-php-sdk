<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class PageQuerySharedSpeechOpenRequest extends Model
{
    /**
     * @description The DeviceName of the device.
     *
     * @example device1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The ID of the device.
     *
     * > If you specify this parameter, you do not need to specify **ProductKey** and **DeviceName**. **IotId** specifies the GUID of the device. The value of the IotId parameter is a combination of the values of the **ProductKey** and **DeviceName** parameters. If you specify the **IotId**, **ProductKey**, and **DeviceName** parameters, the value of the **IotId** parameter takes precedence.
     * @example Q7uOhVRdZRRlDnTLv****00100
     *
     * @var string
     */
    public $iotId;

    /**
     * @description The instance ID. You can view the **ID** of the instance on the **Overview** page in the IoT Platform console.
     *
     * For more information, see the [Overview](~~356505~~) topic of IoT instances.
     * @example iot-2w****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageId;

    /**
     * @description The number of entries per page. Valid values: 1 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The **ProductKey** of the product to which the device belongs.
     *
     * @example sd34****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The code that is used to share the speeches.
     *
     * You can obtain the **code** on the **Shared Corpus Management** page of **Speech Sending Voice Broadcasting Service**.
     * @example ebed9280_ba25_48df_80c2_****
     *
     * @var string
     */
    public $shareTaskCode;

    /**
     * @description The status of the speeches that you want to query. Valid values:
     *
     *   **1**: The speeches are pending approval.
     *   **2**: The speeches are approved.
     *   **3**: The speeches are rejected.
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'deviceName'    => 'DeviceName',
        'iotId'         => 'IotId',
        'iotInstanceId' => 'IotInstanceId',
        'pageId'        => 'PageId',
        'pageSize'      => 'PageSize',
        'productKey'    => 'ProductKey',
        'shareTaskCode' => 'ShareTaskCode',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
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
        if (null !== $this->shareTaskCode) {
            $res['ShareTaskCode'] = $this->shareTaskCode;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PageQuerySharedSpeechOpenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
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
        if (isset($map['ShareTaskCode'])) {
            $model->shareTaskCode = $map['ShareTaskCode'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

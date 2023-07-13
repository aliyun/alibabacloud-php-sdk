<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryProjectShareDeviceListRequest extends Model
{
    /**
     * @description The keyword in the DeviceName of the devices that you want to query. Fuzzy match is supported.
     *
     * @example test
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The instance ID. You can view the **ID** of the instance on the **Overview** page in the IoT Platform console.
     *
     * For more information, see the [Overview](~~356505~~) topic of IoT instances.
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The page number. Valid values: 1 to 10000.
     *
     * @example 1
     *
     * @var int
     */
    public $pageId;

    /**
     * @description The number of entries per page. Valid values: 1 to 50. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The **ProductKey** of the product to which the devices belong.
     *
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;
    protected $_name = [
        'deviceName'    => 'DeviceName',
        'iotInstanceId' => 'IotInstanceId',
        'pageId'        => 'PageId',
        'pageSize'      => 'PageSize',
        'productKey'    => 'ProductKey',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryProjectShareDeviceListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
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

        return $model;
    }
}

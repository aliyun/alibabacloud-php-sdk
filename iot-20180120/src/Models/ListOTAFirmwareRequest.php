<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ListOTAFirmwareRequest extends Model
{
    /**
     * @description The number of the page to return. Pages start from page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The version number of the OTA update package. If you specify this parameter, only the OTA update package of the specified version number is returned.
     *
     * @example 4.0.0
     *
     * @var string
     */
    public $destVersion;

    /**
     * @description The ID of the instance. You can view the instance **ID** on the **Overview** page in the IoT Platform console.
     *
     * >*   If your instance has an ID, you must configure this parameter. If you do not set this parameter, the call fails.
     * >*   If your instance has no **Overview** page or ID, you do not need to set this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The number of entries to return on each page. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The **ProductKey** of the product to which the OTA update package belongs.
     *
     * If you specify this parameter, IoT Platform returns the OTA update packages of the specified product. If you do not specify this parameter, IoT Platform returns the OTA update packages of the current Alibaba Cloud account.
     * @example a19mzPZ****
     *
     * @var string
     */
    public $productKey;
    protected $_name = [
        'currentPage'   => 'CurrentPage',
        'destVersion'   => 'DestVersion',
        'iotInstanceId' => 'IotInstanceId',
        'pageSize'      => 'PageSize',
        'productKey'    => 'ProductKey',
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
        if (null !== $this->destVersion) {
            $res['DestVersion'] = $this->destVersion;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOTAFirmwareRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DestVersion'])) {
            $model->destVersion = $map['DestVersion'];
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

        return $model;
    }
}

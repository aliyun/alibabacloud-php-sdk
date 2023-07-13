<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ListDistributedDeviceRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The DeviceName of the device.
     *
     * @example mydevice
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description The number of entries to return on each page. Maximum value: 200.
     *
     * @example 5
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The **ProductKey** of the product to which the device belongs.
     *
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The ID of the source instance to which the device belongs.
     *
     *   The IDs of public instances in different regions:
     *
     *   China (Shanghai): iotx-oxssharez200.
     *   Japan (Tokyo): iotx-oxssharez300.
     *   Singapore (Singapore): iotx-oxssharez400.
     *   US (Silicon Valley): iotx-oxssharez500.
     *   US (Virginia): iotx-oxssharez600.
     *   Germany (Frankfurt): iotx-oxssharez700.
     *
     *   The IDs of Enterprise Edition instances:
     *
     * 1\. Log on to the IoT Platform console. Select a region from the drop-down list in the upper-left corner of the top navigation bar.
     *
     * 2\. On the **Overview** page, click the instance name. On the **Instance Details** page, view the instance ID in the **Basic Information** section.
     * @example iot-060***
     *
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @description The ID of the Alibaba Cloud account. You can log on to the IoT Platform console, click the profile picture, and then view **Account ID** on the **Security Settings** page.
     *
     * @example 198***
     *
     * @var string
     */
    public $targetUid;
    protected $_name = [
        'currentPage'      => 'CurrentPage',
        'deviceName'       => 'DeviceName',
        'pageSize'         => 'PageSize',
        'productKey'       => 'ProductKey',
        'sourceInstanceId' => 'SourceInstanceId',
        'targetUid'        => 'TargetUid',
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }
        if (null !== $this->targetUid) {
            $res['TargetUid'] = $this->targetUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDistributedDeviceRequest
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
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }
        if (isset($map['TargetUid'])) {
            $model->targetUid = $map['TargetUid'];
        }

        return $model;
    }
}

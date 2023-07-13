<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ListDistributedProductRequest extends Model
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
     * @description The number of entries to return on each page. Maximum value: 200.
     *
     * @example 5
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The **ProductKey** of the product.
     *
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @description The ID of the source instance to which the product belongs.
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
     *   To view the ID of an Enterprise Edition instance, perform the following steps:
     *
     * 1\. Log on to the [IoT Platform console](https://iot.console.aliyun.com/). In the top navigation bar, select the region where the instance resides from the drop-down list.
     *
     * 2\. On the **Overview** page, view the **ID** of the instance.
     * @example iot-060***
     *
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @description The ID of the destination instance to which the product is distributed. For more information about instance IDs, see the description of the **SourceInstanceId** parameter.
     *
     * @example iot-cn-6ja***
     *
     * @var string
     */
    public $targetInstanceId;

    /**
     * @description The ID of the Alibaba Cloud account to which the product belongs. You can log on to the IoT Platform console, click the profile picture, and then view the **account ID** on the **Security Settings** page.
     *
     * @example 198***
     *
     * @var string
     */
    public $targetUid;
    protected $_name = [
        'currentPage'      => 'CurrentPage',
        'pageSize'         => 'PageSize',
        'productKey'       => 'ProductKey',
        'sourceInstanceId' => 'SourceInstanceId',
        'targetInstanceId' => 'TargetInstanceId',
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }
        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
        }
        if (null !== $this->targetUid) {
            $res['TargetUid'] = $this->targetUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDistributedProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
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
        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }
        if (isset($map['TargetUid'])) {
            $model->targetUid = $map['TargetUid'];
        }

        return $model;
    }
}

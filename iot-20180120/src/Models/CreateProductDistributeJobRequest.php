<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateProductDistributeJobRequest extends Model
{
    /**
     * @description The **ProductKey** of the product to be published.
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
     *   The IDs of Enterprise Edition instances:
     *
     * 1\. Log on to the IoT Platform console. Select a region from the drop-down list in the upper-left corner of the top navigation bar.
     *
     * 2\. On the **Overview** page, click the instance name. On the **Instance Details** page, view the instance ID in the **Basic Information** section.
     * @example iot-cn-st2***
     *
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @description The Alibaba Cloud account to which the product belongs. You can log on to the IoT Platform console, click the profile picture, and then view **Logon Account** on the **Security Settings** page.
     *
     * The **TargetUid** and **TargetAliyunId** parameters cannot be left empty at the same time.
     * @example io****@example.com
     *
     * @var string
     */
    public $targetAliyunId;

    /**
     * @description The ID of the destination instance to which the product is distributed. For more information about instance IDs, see the description of the **SourceInstanceId** parameter.
     *
     * @example iot-cn-6ja***
     *
     * @var string
     */
    public $targetInstanceId;

    /**
     * @description The ID of the Alibaba Cloud account to which the product belongs. You can log on to the IoT Platform console, click the profile picture, and then view **Account ID** on the **Security Settings** page.
     *
     * The **TargetUid** and **TargetAliyunId** parameters cannot be left empty at the same time.
     * @example 198***
     *
     * @var string
     */
    public $targetUid;
    protected $_name = [
        'productKey'       => 'ProductKey',
        'sourceInstanceId' => 'SourceInstanceId',
        'targetAliyunId'   => 'TargetAliyunId',
        'targetInstanceId' => 'TargetInstanceId',
        'targetUid'        => 'TargetUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }
        if (null !== $this->targetAliyunId) {
            $res['TargetAliyunId'] = $this->targetAliyunId;
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
     * @return CreateProductDistributeJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }
        if (isset($map['TargetAliyunId'])) {
            $model->targetAliyunId = $map['TargetAliyunId'];
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

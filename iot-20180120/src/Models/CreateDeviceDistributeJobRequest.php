<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceDistributeJobRequest\targetInstanceConfig;
use AlibabaCloud\Tea\Model;

class CreateDeviceDistributeJobRequest extends Model
{
    /**
     * @description The names of the devices to be distributed. You can specify a maximum of 10,000 device names.
     *
     * @example RepeatList
     *
     * @var string[]
     */
    public $deviceName;

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
     * @description The distribution policy. Default value: 0.
     *
     *   **0**: distributes devices to instances in a specified region.
     *   **1**: configures instance IDs in multiple regions and distributes devices to the nearest regions based on the IP addresses of the devices.
     *
     * @example 0
     *
     * @var int
     */
    public $strategy;

    /**
     * @description The Alibaba Cloud account to which the device belongs. You can log on to the IoT Platform console, click the profile picture, and then view the account ID on the **Security Settings** page.
     *
     * The **TargetUid** and **TargetAliyunId** parameters cannot be left empty at the same time.
     * @example io****@example.com
     *
     * @var string
     */
    public $targetAliyunId;

    /**
     * @var targetInstanceConfig[]
     */
    public $targetInstanceConfig;

    /**
     * @description The ID of the Alibaba Cloud account to which the device belongs. You can log on to the IoT Platform console, click the profile picture, and then view the account ID on the **Security Settings** page.
     *
     * The **TargetUid** and **TargetAliyunId** parameters cannot be left empty at the same time.
     * @example 198***
     *
     * @var string
     */
    public $targetUid;
    protected $_name = [
        'deviceName'           => 'DeviceName',
        'productKey'           => 'ProductKey',
        'sourceInstanceId'     => 'SourceInstanceId',
        'strategy'             => 'Strategy',
        'targetAliyunId'       => 'TargetAliyunId',
        'targetInstanceConfig' => 'TargetInstanceConfig',
        'targetUid'            => 'TargetUid',
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
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }
        if (null !== $this->targetAliyunId) {
            $res['TargetAliyunId'] = $this->targetAliyunId;
        }
        if (null !== $this->targetInstanceConfig) {
            $res['TargetInstanceConfig'] = [];
            if (null !== $this->targetInstanceConfig && \is_array($this->targetInstanceConfig)) {
                $n = 0;
                foreach ($this->targetInstanceConfig as $item) {
                    $res['TargetInstanceConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->targetUid) {
            $res['TargetUid'] = $this->targetUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDeviceDistributeJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            if (!empty($map['DeviceName'])) {
                $model->deviceName = $map['DeviceName'];
            }
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }
        if (isset($map['TargetAliyunId'])) {
            $model->targetAliyunId = $map['TargetAliyunId'];
        }
        if (isset($map['TargetInstanceConfig'])) {
            if (!empty($map['TargetInstanceConfig'])) {
                $model->targetInstanceConfig = [];
                $n                           = 0;
                foreach ($map['TargetInstanceConfig'] as $item) {
                    $model->targetInstanceConfig[$n++] = null !== $item ? targetInstanceConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TargetUid'])) {
            $model->targetUid = $map['TargetUid'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceDistributeJobRequest\targetInstanceConfig;
use AlibabaCloud\Tea\Model;

class CreateDeviceDistributeJobRequest extends Model
{
    /**
     * @example RepeatList
     *
     * @var string[]
     */
    public $deviceName;

    /**
     * @example a1BwAGV****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example iot-060***
     *
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @example 0
     *
     * @var int
     */
    public $strategy;

    /**
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

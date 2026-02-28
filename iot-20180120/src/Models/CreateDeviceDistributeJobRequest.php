<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceDistributeJobRequest\targetInstanceConfig;

class CreateDeviceDistributeJobRequest extends Model
{
    /**
     * @var string[]
     */
    public $deviceName;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @var int
     */
    public $strategy;

    /**
     * @var string
     */
    public $targetAliyunId;

    /**
     * @var targetInstanceConfig[]
     */
    public $targetInstanceConfig;

    /**
     * @var string
     */
    public $targetUid;
    protected $_name = [
        'deviceName' => 'DeviceName',
        'productKey' => 'ProductKey',
        'sourceInstanceId' => 'SourceInstanceId',
        'strategy' => 'Strategy',
        'targetAliyunId' => 'TargetAliyunId',
        'targetInstanceConfig' => 'TargetInstanceConfig',
        'targetUid' => 'TargetUid',
    ];

    public function validate()
    {
        if (\is_array($this->deviceName)) {
            Model::validateArray($this->deviceName);
        }
        if (\is_array($this->targetInstanceConfig)) {
            Model::validateArray($this->targetInstanceConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceName) {
            if (\is_array($this->deviceName)) {
                $res['DeviceName'] = [];
                $n1 = 0;
                foreach ($this->deviceName as $item1) {
                    $res['DeviceName'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->targetInstanceConfig)) {
                $res['TargetInstanceConfig'] = [];
                $n1 = 0;
                foreach ($this->targetInstanceConfig as $item1) {
                    $res['TargetInstanceConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targetUid) {
            $res['TargetUid'] = $this->targetUid;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            if (!empty($map['DeviceName'])) {
                $model->deviceName = [];
                $n1 = 0;
                foreach ($map['DeviceName'] as $item1) {
                    $model->deviceName[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['TargetInstanceConfig'] as $item1) {
                    $model->targetInstanceConfig[$n1] = targetInstanceConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TargetUid'])) {
            $model->targetUid = $map['TargetUid'];
        }

        return $model;
    }
}

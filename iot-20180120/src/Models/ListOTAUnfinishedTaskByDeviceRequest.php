<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

class ListOTAUnfinishedTaskByDeviceRequest extends Model
{
    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var string[]
     */
    public $taskStatusList;
    protected $_name = [
        'deviceName' => 'DeviceName',
        'iotId' => 'IotId',
        'iotInstanceId' => 'IotInstanceId',
        'moduleName' => 'ModuleName',
        'productKey' => 'ProductKey',
        'taskStatus' => 'TaskStatus',
        'taskStatusList' => 'TaskStatusList',
    ];

    public function validate()
    {
        if (\is_array($this->taskStatusList)) {
            Model::validateArray($this->taskStatusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }

        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        if (null !== $this->taskStatusList) {
            if (\is_array($this->taskStatusList)) {
                $res['TaskStatusList'] = [];
                $n1 = 0;
                foreach ($this->taskStatusList as $item1) {
                    $res['TaskStatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            $model->deviceName = $map['DeviceName'];
        }

        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }

        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }

        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        if (isset($map['TaskStatusList'])) {
            if (!empty($map['TaskStatusList'])) {
                $model->taskStatusList = [];
                $n1 = 0;
                foreach ($map['TaskStatusList'] as $item1) {
                    $model->taskStatusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

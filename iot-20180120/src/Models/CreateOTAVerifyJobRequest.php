<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\CreateOTAVerifyJobRequest\tag;

class CreateOTAVerifyJobRequest extends Model
{
    /**
     * @var string
     */
    public $downloadProtocol;

    /**
     * @var string
     */
    public $firmwareId;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var bool
     */
    public $needConfirm;

    /**
     * @var bool
     */
    public $needPush;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string[]
     */
    public $targetDeviceName;

    /**
     * @var int
     */
    public $timeoutInMinutes;
    protected $_name = [
        'downloadProtocol' => 'DownloadProtocol',
        'firmwareId' => 'FirmwareId',
        'iotInstanceId' => 'IotInstanceId',
        'needConfirm' => 'NeedConfirm',
        'needPush' => 'NeedPush',
        'productKey' => 'ProductKey',
        'tag' => 'Tag',
        'targetDeviceName' => 'TargetDeviceName',
        'timeoutInMinutes' => 'TimeoutInMinutes',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        if (\is_array($this->targetDeviceName)) {
            Model::validateArray($this->targetDeviceName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downloadProtocol) {
            $res['DownloadProtocol'] = $this->downloadProtocol;
        }

        if (null !== $this->firmwareId) {
            $res['FirmwareId'] = $this->firmwareId;
        }

        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        if (null !== $this->needConfirm) {
            $res['NeedConfirm'] = $this->needConfirm;
        }

        if (null !== $this->needPush) {
            $res['NeedPush'] = $this->needPush;
        }

        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->targetDeviceName) {
            if (\is_array($this->targetDeviceName)) {
                $res['TargetDeviceName'] = [];
                $n1 = 0;
                foreach ($this->targetDeviceName as $item1) {
                    $res['TargetDeviceName'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
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
        if (isset($map['DownloadProtocol'])) {
            $model->downloadProtocol = $map['DownloadProtocol'];
        }

        if (isset($map['FirmwareId'])) {
            $model->firmwareId = $map['FirmwareId'];
        }

        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        if (isset($map['NeedConfirm'])) {
            $model->needConfirm = $map['NeedConfirm'];
        }

        if (isset($map['NeedPush'])) {
            $model->needPush = $map['NeedPush'];
        }

        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TargetDeviceName'])) {
            if (!empty($map['TargetDeviceName'])) {
                $model->targetDeviceName = [];
                $n1 = 0;
                foreach ($map['TargetDeviceName'] as $item1) {
                    $model->targetDeviceName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }

        return $model;
    }
}

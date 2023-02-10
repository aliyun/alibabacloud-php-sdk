<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\CreateOTAVerifyJobRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateOTAVerifyJobRequest extends Model
{
    /**
     * @example HTTPS
     *
     * @var string
     */
    public $downloadProtocol;

    /**
     * @example nx3xxVvFdwvn6dim50PY03****
     *
     * @var string
     */
    public $firmwareId;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example false
     *
     * @var bool
     */
    public $needConfirm;

    /**
     * @example true
     *
     * @var bool
     */
    public $needPush;

    /**
     * @example a1VJwBw****
     *
     * @var string
     */
    public $productKey;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @example testdevice
     *
     * @var string[]
     */
    public $targetDeviceName;

    /**
     * @example 1440
     *
     * @var int
     */
    public $timeoutInMinutes;
    protected $_name = [
        'downloadProtocol' => 'DownloadProtocol',
        'firmwareId'       => 'FirmwareId',
        'iotInstanceId'    => 'IotInstanceId',
        'needConfirm'      => 'NeedConfirm',
        'needPush'         => 'NeedPush',
        'productKey'       => 'ProductKey',
        'tag'              => 'Tag',
        'targetDeviceName' => 'TargetDeviceName',
        'timeoutInMinutes' => 'TimeoutInMinutes',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->targetDeviceName) {
            $res['TargetDeviceName'] = $this->targetDeviceName;
        }
        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOTAVerifyJobRequest
     */
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
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TargetDeviceName'])) {
            if (!empty($map['TargetDeviceName'])) {
                $model->targetDeviceName = $map['TargetDeviceName'];
            }
        }
        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }

        return $model;
    }
}

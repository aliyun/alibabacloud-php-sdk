<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceDistributeJobRequest\targetInstanceConfig;
use AlibabaCloud\Tea\Model;

class CreateDeviceDistributeJobRequest extends Model
{
    /**
     * @var string
     */
    public $apiProduct;

    /**
     * @var string
     */
    public $apiRevision;

    /**
     * @var string[]
     */
    public $deviceName;

    /**
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $targetUid;

    /**
     * @var string
     */
    public $targetAliyunId;

    /**
     * @var string
     */
    public $captcha;

    /**
     * @var targetInstanceConfig[]
     */
    public $targetInstanceConfig;

    /**
     * @var int
     */
    public $strategy;
    protected $_name = [
        'apiProduct'           => 'ApiProduct',
        'apiRevision'          => 'ApiRevision',
        'deviceName'           => 'DeviceName',
        'sourceInstanceId'     => 'SourceInstanceId',
        'productKey'           => 'ProductKey',
        'targetUid'            => 'TargetUid',
        'targetAliyunId'       => 'TargetAliyunId',
        'captcha'              => 'Captcha',
        'targetInstanceConfig' => 'TargetInstanceConfig',
        'strategy'             => 'Strategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->apiRevision) {
            $res['ApiRevision'] = $this->apiRevision;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->targetUid) {
            $res['TargetUid'] = $this->targetUid;
        }
        if (null !== $this->targetAliyunId) {
            $res['TargetAliyunId'] = $this->targetAliyunId;
        }
        if (null !== $this->captcha) {
            $res['Captcha'] = $this->captcha;
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
        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
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
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
        }
        if (isset($map['DeviceName'])) {
            if (!empty($map['DeviceName'])) {
                $model->deviceName = $map['DeviceName'];
            }
        }
        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['TargetUid'])) {
            $model->targetUid = $map['TargetUid'];
        }
        if (isset($map['TargetAliyunId'])) {
            $model->targetAliyunId = $map['TargetAliyunId'];
        }
        if (isset($map['Captcha'])) {
            $model->captcha = $map['Captcha'];
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
        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }

        return $model;
    }
}

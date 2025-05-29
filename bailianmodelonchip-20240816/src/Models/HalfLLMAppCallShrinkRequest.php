<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models;

use AlibabaCloud\Dara\Model;

class HalfLLMAppCallShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $bizParamShrink;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $modelTypeListShrink;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'appId' => 'appId',
        'bizParamShrink' => 'bizParam',
        'deviceName' => 'deviceName',
        'modelTypeListShrink' => 'modelTypeList',
        'productKey' => 'productKey',
        'sessionId' => 'sessionId',
        'tenantId' => 'tenantId',
        'text' => 'text',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->bizParamShrink) {
            $res['bizParam'] = $this->bizParamShrink;
        }

        if (null !== $this->deviceName) {
            $res['deviceName'] = $this->deviceName;
        }

        if (null !== $this->modelTypeListShrink) {
            $res['modelTypeList'] = $this->modelTypeListShrink;
        }

        if (null !== $this->productKey) {
            $res['productKey'] = $this->productKey;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['bizParam'])) {
            $model->bizParamShrink = $map['bizParam'];
        }

        if (isset($map['deviceName'])) {
            $model->deviceName = $map['deviceName'];
        }

        if (isset($map['modelTypeList'])) {
            $model->modelTypeListShrink = $map['modelTypeList'];
        }

        if (isset($map['productKey'])) {
            $model->productKey = $map['productKey'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}

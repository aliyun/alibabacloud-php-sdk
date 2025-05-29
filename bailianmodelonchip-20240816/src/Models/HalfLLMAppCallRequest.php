<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models;

use AlibabaCloud\Dara\Model;

class HalfLLMAppCallRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string[]
     */
    public $bizParam;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string[]
     */
    public $modelTypeList;

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
        'bizParam' => 'bizParam',
        'deviceName' => 'deviceName',
        'modelTypeList' => 'modelTypeList',
        'productKey' => 'productKey',
        'sessionId' => 'sessionId',
        'tenantId' => 'tenantId',
        'text' => 'text',
    ];

    public function validate()
    {
        if (\is_array($this->bizParam)) {
            Model::validateArray($this->bizParam);
        }
        if (\is_array($this->modelTypeList)) {
            Model::validateArray($this->modelTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->bizParam) {
            if (\is_array($this->bizParam)) {
                $res['bizParam'] = [];
                foreach ($this->bizParam as $key1 => $value1) {
                    $res['bizParam'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->deviceName) {
            $res['deviceName'] = $this->deviceName;
        }

        if (null !== $this->modelTypeList) {
            if (\is_array($this->modelTypeList)) {
                $res['modelTypeList'] = [];
                $n1 = 0;
                foreach ($this->modelTypeList as $item1) {
                    $res['modelTypeList'][$n1++] = $item1;
                }
            }
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
            if (!empty($map['bizParam'])) {
                $model->bizParam = [];
                foreach ($map['bizParam'] as $key1 => $value1) {
                    $model->bizParam[$key1] = $value1;
                }
            }
        }

        if (isset($map['deviceName'])) {
            $model->deviceName = $map['deviceName'];
        }

        if (isset($map['modelTypeList'])) {
            if (!empty($map['modelTypeList'])) {
                $model->modelTypeList = [];
                $n1 = 0;
                foreach ($map['modelTypeList'] as $item1) {
                    $model->modelTypeList[$n1++] = $item1;
                }
            }
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

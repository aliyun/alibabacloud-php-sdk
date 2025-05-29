<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models;

use AlibabaCloud\Dara\Model;

class HalfLLMImageChatRequest extends Model
{
    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var bool
     */
    public $enableSearch;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $inputText;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'deviceName' => 'deviceName',
        'enableSearch' => 'enableSearch',
        'imageUrl' => 'imageUrl',
        'inputText' => 'inputText',
        'model' => 'model',
        'productKey' => 'productKey',
        'prompt' => 'prompt',
        'sessionId' => 'sessionId',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['deviceName'] = $this->deviceName;
        }

        if (null !== $this->enableSearch) {
            $res['enableSearch'] = $this->enableSearch;
        }

        if (null !== $this->imageUrl) {
            $res['imageUrl'] = $this->imageUrl;
        }

        if (null !== $this->inputText) {
            $res['inputText'] = $this->inputText;
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->productKey) {
            $res['productKey'] = $this->productKey;
        }

        if (null !== $this->prompt) {
            $res['prompt'] = $this->prompt;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['deviceName'])) {
            $model->deviceName = $map['deviceName'];
        }

        if (isset($map['enableSearch'])) {
            $model->enableSearch = $map['enableSearch'];
        }

        if (isset($map['imageUrl'])) {
            $model->imageUrl = $map['imageUrl'];
        }

        if (isset($map['inputText'])) {
            $model->inputText = $map['inputText'];
        }

        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['productKey'])) {
            $model->productKey = $map['productKey'];
        }

        if (isset($map['prompt'])) {
            $model->prompt = $map['prompt'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}

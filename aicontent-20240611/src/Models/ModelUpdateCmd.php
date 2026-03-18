<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelUpdateCmd extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $baseUrl;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $maxInputLength;

    /**
     * @var string
     */
    public $maxOutputLength;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $symbol;

    /**
     * @var string
     */
    public $tags;
    protected $_name = [
        'apiKey' => 'apiKey',
        'baseUrl' => 'baseUrl',
        'description' => 'description',
        'maxInputLength' => 'maxInputLength',
        'maxOutputLength' => 'maxOutputLength',
        'modelId' => 'modelId',
        'modelType' => 'modelType',
        'name' => 'name',
        'status' => 'status',
        'symbol' => 'symbol',
        'tags' => 'tags',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['apiKey'] = $this->apiKey;
        }

        if (null !== $this->baseUrl) {
            $res['baseUrl'] = $this->baseUrl;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->maxInputLength) {
            $res['maxInputLength'] = $this->maxInputLength;
        }

        if (null !== $this->maxOutputLength) {
            $res['maxOutputLength'] = $this->maxOutputLength;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->modelType) {
            $res['modelType'] = $this->modelType;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->symbol) {
            $res['symbol'] = $this->symbol;
        }

        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
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
        if (isset($map['apiKey'])) {
            $model->apiKey = $map['apiKey'];
        }

        if (isset($map['baseUrl'])) {
            $model->baseUrl = $map['baseUrl'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['maxInputLength'])) {
            $model->maxInputLength = $map['maxInputLength'];
        }

        if (isset($map['maxOutputLength'])) {
            $model->maxOutputLength = $map['maxOutputLength'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['modelType'])) {
            $model->modelType = $map['modelType'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['symbol'])) {
            $model->symbol = $map['symbol'];
        }

        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }

        return $model;
    }
}

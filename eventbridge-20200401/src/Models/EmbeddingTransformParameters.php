<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\EmbeddingTransformParameters\embeddingData;

class EmbeddingTransformParameters extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var embeddingData
     */
    public $embeddingData;

    /**
     * @var string
     */
    public $embeddingModel;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'embeddingData' => 'EmbeddingData',
        'embeddingModel' => 'EmbeddingModel',
    ];

    public function validate()
    {
        if (null !== $this->embeddingData) {
            $this->embeddingData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->embeddingData) {
            $res['EmbeddingData'] = null !== $this->embeddingData ? $this->embeddingData->toArray($noStream) : $this->embeddingData;
        }

        if (null !== $this->embeddingModel) {
            $res['EmbeddingModel'] = $this->embeddingModel;
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
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['EmbeddingData'])) {
            $model->embeddingData = embeddingData::fromMap($map['EmbeddingData']);
        }

        if (isset($map['EmbeddingModel'])) {
            $model->embeddingModel = $map['EmbeddingModel'];
        }

        return $model;
    }
}

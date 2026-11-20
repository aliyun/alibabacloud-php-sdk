<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BMed\V20261116\Models\MedicalModelInferenceRequest;

use AlibabaCloud\Dara\Model;

class params extends Model
{
    /**
     * @var string
     */
    public $modelName;

    /**
     * @var bool
     */
    public $responseStreaming;
    protected $_name = [
        'modelName' => 'modelName',
        'responseStreaming' => 'responseStreaming',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
        }

        if (null !== $this->responseStreaming) {
            $res['responseStreaming'] = $this->responseStreaming;
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
        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }

        if (isset($map['responseStreaming'])) {
            $model->responseStreaming = $map['responseStreaming'];
        }

        return $model;
    }
}

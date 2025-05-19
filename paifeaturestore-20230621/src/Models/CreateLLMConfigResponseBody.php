<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;

class CreateLLMConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $LLMConfigId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'LLMConfigId' => 'LLMConfigId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->LLMConfigId) {
            $res['LLMConfigId'] = $this->LLMConfigId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['LLMConfigId'])) {
            $model->LLMConfigId = $map['LLMConfigId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

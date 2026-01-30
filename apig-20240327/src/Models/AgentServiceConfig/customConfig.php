<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\AgentServiceConfig;

use AlibabaCloud\Dara\Model;

class customConfig extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $apiKeyGenerateMode;
    protected $_name = [
        'apiKey' => 'apiKey',
        'apiKeyGenerateMode' => 'apiKeyGenerateMode',
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

        if (null !== $this->apiKeyGenerateMode) {
            $res['apiKeyGenerateMode'] = $this->apiKeyGenerateMode;
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

        if (isset($map['apiKeyGenerateMode'])) {
            $model->apiKeyGenerateMode = $map['apiKeyGenerateMode'];
        }

        return $model;
    }
}

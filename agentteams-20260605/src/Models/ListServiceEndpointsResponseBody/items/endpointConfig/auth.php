<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\ListServiceEndpointsResponseBody\items\endpointConfig;

use AlibabaCloud\Dara\Model;

class auth extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $apiKeyName;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'apiKeyName' => 'ApiKeyName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->apiKeyName) {
            $res['ApiKeyName'] = $this->apiKeyName;
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

        if (isset($map['ApiKeyName'])) {
            $model->apiKeyName = $map['ApiKeyName'];
        }

        return $model;
    }
}

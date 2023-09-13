<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\UpdateConnectionRequest\authParameters;

use AlibabaCloud\Tea\Model;

class apiKeyAuthParameters extends Model
{
    /**
     * @description The key of the API key.
     *
     * @example name
     *
     * @var string
     */
    public $apiKeyName;

    /**
     * @description The value of the API key.
     *
     * @example demo
     *
     * @var string
     */
    public $apiKeyValue;
    protected $_name = [
        'apiKeyName'  => 'ApiKeyName',
        'apiKeyValue' => 'ApiKeyValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiKeyName) {
            $res['ApiKeyName'] = $this->apiKeyName;
        }
        if (null !== $this->apiKeyValue) {
            $res['ApiKeyValue'] = $this->apiKeyValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiKeyAuthParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiKeyName'])) {
            $model->apiKeyName = $map['ApiKeyName'];
        }
        if (isset($map['ApiKeyValue'])) {
            $model->apiKeyValue = $map['ApiKeyValue'];
        }

        return $model;
    }
}

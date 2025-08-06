<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateConnectionRequest\authParameters;

use AlibabaCloud\Dara\Model;

class apiKeyAuthParameters extends Model
{
    /**
     * @var string
     */
    public $apiKeyName;

    /**
     * @var string
     */
    public $apiKeyValue;
    protected $_name = [
        'apiKeyName' => 'ApiKeyName',
        'apiKeyValue' => 'ApiKeyValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

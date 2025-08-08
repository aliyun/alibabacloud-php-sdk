<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\Authorization;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devs\V20230714\Models\APIKeyAuthParameter;

class parameters extends Model
{
    /**
     * @var APIKeyAuthParameter
     */
    public $apiKeyParameter;
    protected $_name = [
        'apiKeyParameter' => 'apiKeyParameter',
    ];

    public function validate()
    {
        if (null !== $this->apiKeyParameter) {
            $this->apiKeyParameter->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeyParameter) {
            $res['apiKeyParameter'] = null !== $this->apiKeyParameter ? $this->apiKeyParameter->toArray($noStream) : $this->apiKeyParameter;
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
        if (isset($map['apiKeyParameter'])) {
            $model->apiKeyParameter = APIKeyAuthParameter::fromMap($map['apiKeyParameter']);
        }

        return $model;
    }
}

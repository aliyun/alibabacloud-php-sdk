<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class DescribeModelOperatorApiKeyRequest extends Model
{
    /**
     * @var int
     */
    public $apiKeyId;
    protected $_name = [
        'apiKeyId' => 'ApiKeyId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeyId) {
            $res['ApiKeyId'] = $this->apiKeyId;
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
        if (isset($map['ApiKeyId'])) {
            $model->apiKeyId = $map['ApiKeyId'];
        }

        return $model;
    }
}

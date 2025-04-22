<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DFS\V20180620\Models\GetAccessRuleResponseBody\accessRule;

class GetAccessRuleResponseBody extends Model
{
    /**
     * @var accessRule
     */
    public $accessRule;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessRule' => 'AccessRule',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->accessRule) {
            $this->accessRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessRule) {
            $res['AccessRule'] = null !== $this->accessRule ? $this->accessRule->toArray($noStream) : $this->accessRule;
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
        if (isset($map['AccessRule'])) {
            $model->accessRule = accessRule::fromMap($map['AccessRule']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

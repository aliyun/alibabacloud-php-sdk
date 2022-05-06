<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\SDK\DFS\V20180620\Models\GetAccessRuleResponseBody\accessRule;
use AlibabaCloud\Tea\Model;

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
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessRule) {
            $res['AccessRule'] = null !== $this->accessRule ? $this->accessRule->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccessRuleResponseBody
     */
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

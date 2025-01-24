<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUserProfilePathRulesResponseBody\userProfilePathRule;

class DescribeUserProfilePathRulesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var userProfilePathRule
     */
    public $userProfilePathRule;
    protected $_name = [
        'requestId'           => 'RequestId',
        'userProfilePathRule' => 'UserProfilePathRule',
    ];

    public function validate()
    {
        if (null !== $this->userProfilePathRule) {
            $this->userProfilePathRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userProfilePathRule) {
            $res['UserProfilePathRule'] = null !== $this->userProfilePathRule ? $this->userProfilePathRule->toArray($noStream) : $this->userProfilePathRule;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UserProfilePathRule'])) {
            $model->userProfilePathRule = userProfilePathRule::fromMap($map['UserProfilePathRule']);
        }

        return $model;
    }
}

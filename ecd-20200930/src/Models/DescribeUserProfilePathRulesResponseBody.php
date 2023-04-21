<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeUserProfilePathRulesResponseBody\userProfilePathRule;
use AlibabaCloud\Tea\Model;

class DescribeUserProfilePathRulesResponseBody extends Model
{
    /**
     * @example A87DBB05-653A-5E4B-B72B-5F4A1E07****
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->userProfilePathRule) {
            $res['UserProfilePathRule'] = null !== $this->userProfilePathRule ? $this->userProfilePathRule->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserProfilePathRulesResponseBody
     */
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

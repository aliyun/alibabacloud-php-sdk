<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUserBaselineAuthorizationResponseBody\userBaselineAuthorization;
use AlibabaCloud\Tea\Model;

class DescribeUserBaselineAuthorizationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userBaselineAuthorization
     */
    public $userBaselineAuthorization;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'userBaselineAuthorization' => 'UserBaselineAuthorization',
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
        if (null !== $this->userBaselineAuthorization) {
            $res['UserBaselineAuthorization'] = null !== $this->userBaselineAuthorization ? $this->userBaselineAuthorization->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserBaselineAuthorizationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserBaselineAuthorization'])) {
            $model->userBaselineAuthorization = userBaselineAuthorization::fromMap($map['UserBaselineAuthorization']);
        }

        return $model;
    }
}

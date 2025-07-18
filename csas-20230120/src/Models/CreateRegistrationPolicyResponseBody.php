<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\CreateRegistrationPolicyResponseBody\policy;
use AlibabaCloud\Tea\Model;

class CreateRegistrationPolicyResponseBody extends Model
{
    /**
     * @var policy
     */
    public $policy;

    /**
     * @example FEF1144C-95D1-5F7C-81EF-9DB70EA49FCE
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'policy' => 'Policy',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->policy) {
            $res['Policy'] = null !== $this->policy ? $this->policy->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRegistrationPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Policy'])) {
            $model->policy = policy::fromMap($map['Policy']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

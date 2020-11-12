<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetPolicyResponse\policy;
use AlibabaCloud\Tea\Model;

class GetPolicyResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var policy
     */
    public $policy;
    protected $_name = [
        'requestId' => 'RequestId',
        'policy'    => 'Policy',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('policy', $this->policy, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->policy) {
            $res['Policy'] = null !== $this->policy ? $this->policy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPolicyResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Policy'])) {
            $model->policy = policy::fromMap($map['Policy']);
        }

        return $model;
    }
}

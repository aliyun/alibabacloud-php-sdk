<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20161111\Models;

use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListPolicyVersionsResponseBody\policyVersions;
use AlibabaCloud\Tea\Model;

class ListPolicyVersionsResponseBody extends Model
{
    /**
     * @var policyVersions
     */
    public $policyVersions;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'policyVersions' => 'PolicyVersions',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyVersions) {
            $res['PolicyVersions'] = null !== $this->policyVersions ? $this->policyVersions->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPolicyVersionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyVersions'])) {
            $model->policyVersions = policyVersions::fromMap($map['PolicyVersions']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

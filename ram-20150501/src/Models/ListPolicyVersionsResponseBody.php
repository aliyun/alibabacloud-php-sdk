<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListPolicyVersionsResponseBody\policyVersions;
use AlibabaCloud\Tea\Model;

class ListPolicyVersionsResponseBody extends Model
{
    /**
     * @description The list of the policy versions.
     *
     * @var policyVersions
     */
    public $policyVersions;

    /**
     * @description The ID of the request.
     *
     * @example 7B8A4E7D-6CFF-471D-84DF-195A7A241ECB
     *
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesForRoleResponseBody\policies;
use AlibabaCloud\Tea\Model;

class ListPoliciesForRoleResponseBody extends Model
{
    /**
     * @description The list of the policies that are attached to the RAM role.
     *
     * @var policies
     */
    public $policies;

    /**
     * @description The ID of the request.
     *
     * @example 7B8A4E7D-6CFF-471D-84DF-195A7A241ECB
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'policies'  => 'Policies',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policies) {
            $res['Policies'] = null !== $this->policies ? $this->policies->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPoliciesForRoleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Policies'])) {
            $model->policies = policies::fromMap($map['Policies']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class AddIpControlPolicyItemResponseBody extends Model
{
    /**
     * @description When you call this operation, note that:
     *
     *   This operation is intended for API providers.
     *   An added policy immediately takes effect on all APIs that are bound to the access control list (ACL).
     *   A maximum of 100 policies can be added to an ACL.
     *
     * @example P151617000829241
     *
     * @var string
     */
    public $policyItemId;

    /**
     * @description Adds a policy to an existing ACL.
     *
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BZ004
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'policyItemId' => 'PolicyItemId',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->policyItemId) {
            $res['PolicyItemId'] = $this->policyItemId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddIpControlPolicyItemResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PolicyItemId'])) {
            $model->policyItemId = $map['PolicyItemId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

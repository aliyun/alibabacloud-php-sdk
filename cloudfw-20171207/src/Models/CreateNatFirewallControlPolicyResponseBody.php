<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class CreateNatFirewallControlPolicyResponseBody extends Model
{
    /**
     * @description The unique ID of the access control policy.
     *
     * >  To modify an access control policy, you must specify the unique ID of the policy. You can call the DescribeNatFirewallControlPolicy operation to obtain the ID.
     * @example 6504d2fb-ab36-49c3-92a6-822a56549783
     *
     * @var string
     */
    public $aclUuid;

    /**
     * @description The request ID.
     *
     * @example 0DC783F1-B3A7-578D-8A63-687CC9B82C0A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aclUuid'   => 'AclUuid',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclUuid) {
            $res['AclUuid'] = $this->aclUuid;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNatFirewallControlPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclUuid'])) {
            $model->aclUuid = $map['AclUuid'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

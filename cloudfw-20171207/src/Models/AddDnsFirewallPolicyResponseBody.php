<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class AddDnsFirewallPolicyResponseBody extends Model
{
    /**
     * @example f88dae6f-XXX-XXX-613de9ab2be8
     *
     * @var string
     */
    public $aclUuid;

    /**
     * @example 71209DFE-XXX-XXX-52B4A4E9DA3B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aclUuid' => 'AclUuid',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

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
     * @return AddDnsFirewallPolicyResponseBody
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

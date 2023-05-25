<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DeleteIpControlRequest extends Model
{
    /**
     * @description *   This operation is intended for API providers.
     *   If the ACL is bound to an API, you must unbind the ACL from the API before you can delete the ACL. Otherwise, an error is returned.
     *   If you call this operation on an ACL that does not exist, a success message is returned.
     *
     * @example 7ea91319a34d48a09b5c9c871d9768b1
     *
     * @var string
     */
    public $ipControlId;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'ipControlId'   => 'IpControlId',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipControlId) {
            $res['IpControlId'] = $this->ipControlId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteIpControlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpControlId'])) {
            $model->ipControlId = $map['IpControlId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models;

use AlibabaCloud\Tea\Model;

class DeleteIpControlRequest extends Model
{
    /**
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

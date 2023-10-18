<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class ListAuditSecurityIpRequest extends Model
{
    /**
     * @description The name of the review security group in which you want to query IP addresses. If you do not specify this parameter, IP addresses in all review security groups are queried.
     *
     * @example Default
     *
     * @var string
     */
    public $securityGroupName;
    protected $_name = [
        'securityGroupName' => 'SecurityGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAuditSecurityIpRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }

        return $model;
    }
}

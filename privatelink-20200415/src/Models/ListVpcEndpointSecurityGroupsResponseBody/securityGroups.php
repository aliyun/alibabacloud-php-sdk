<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointSecurityGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class securityGroups extends Model
{
    /**
     * @description The ID of the security group that is associated with the endpoint.
     *
     * @example sg-hp33bw6ynvm2yb0e****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The associate status of the security group, valid values:
     * - Detaching: The security group is being detached.
     * @example Attached
     *
     * @var string
     */
    public $securityGroupStatus;
    protected $_name = [
        'securityGroupId'     => 'SecurityGroupId',
        'securityGroupStatus' => 'SecurityGroupStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->securityGroupStatus) {
            $res['SecurityGroupStatus'] = $this->securityGroupStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SecurityGroupStatus'])) {
            $model->securityGroupStatus = $map['SecurityGroupStatus'];
        }

        return $model;
    }
}

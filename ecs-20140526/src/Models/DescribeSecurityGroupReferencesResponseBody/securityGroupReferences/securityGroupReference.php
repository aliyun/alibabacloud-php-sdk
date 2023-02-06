<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesResponseBody\securityGroupReferences;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesResponseBody\securityGroupReferences\securityGroupReference\referencingSecurityGroups;
use AlibabaCloud\Tea\Model;

class securityGroupReference extends Model
{
    /**
     * @description Details about the security groups whose rules are referencing the specified security groups.
     *
     * @var referencingSecurityGroups
     */
    public $referencingSecurityGroups;

    /**
     * @description The ID of the specified security group.
     *
     * @example sg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $securityGroupId;
    protected $_name = [
        'referencingSecurityGroups' => 'ReferencingSecurityGroups',
        'securityGroupId'           => 'SecurityGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->referencingSecurityGroups) {
            $res['ReferencingSecurityGroups'] = null !== $this->referencingSecurityGroups ? $this->referencingSecurityGroups->toMap() : null;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityGroupReference
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReferencingSecurityGroups'])) {
            $model->referencingSecurityGroups = referencingSecurityGroups::fromMap($map['ReferencingSecurityGroups']);
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesResponseBody\securityGroupReferences;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesResponseBody\securityGroupReferences\securityGroupReference\referencingSecurityGroups;

class securityGroupReference extends Model
{
    /**
     * @var referencingSecurityGroups
     */
    public $referencingSecurityGroups;
    /**
     * @var string
     */
    public $securityGroupId;
    protected $_name = [
        'referencingSecurityGroups' => 'ReferencingSecurityGroups',
        'securityGroupId'           => 'SecurityGroupId',
    ];

    public function validate()
    {
        if (null !== $this->referencingSecurityGroups) {
            $this->referencingSecurityGroups->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->referencingSecurityGroups) {
            $res['ReferencingSecurityGroups'] = null !== $this->referencingSecurityGroups ? $this->referencingSecurityGroups->toArray($noStream) : $this->referencingSecurityGroups;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

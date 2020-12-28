<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesResponseBody\securityGroupReferences\referencingSecurityGroups;
use AlibabaCloud\Tea\Model;

class securityGroupReferences extends Model
{
    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var referencingSecurityGroups[]
     */
    public $referencingSecurityGroups;
    protected $_name = [
        'securityGroupId'           => 'SecurityGroupId',
        'referencingSecurityGroups' => 'ReferencingSecurityGroups',
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
        if (null !== $this->referencingSecurityGroups) {
            $res['ReferencingSecurityGroups'] = [];
            if (null !== $this->referencingSecurityGroups && \is_array($this->referencingSecurityGroups)) {
                $n = 0;
                foreach ($this->referencingSecurityGroups as $item) {
                    $res['ReferencingSecurityGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityGroupReferences
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['ReferencingSecurityGroups'])) {
            if (!empty($map['ReferencingSecurityGroups'])) {
                $model->referencingSecurityGroups = [];
                $n                                = 0;
                foreach ($map['ReferencingSecurityGroups'] as $item) {
                    $model->referencingSecurityGroups[$n++] = null !== $item ? referencingSecurityGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

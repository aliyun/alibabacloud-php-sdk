<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesResponseBody\securityGroupReferences\securityGroupReference;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupReferencesResponseBody\securityGroupReferences\securityGroupReference\referencingSecurityGroups\referencingSecurityGroup;

class referencingSecurityGroups extends Model
{
    /**
     * @var referencingSecurityGroup[]
     */
    public $referencingSecurityGroup;
    protected $_name = [
        'referencingSecurityGroup' => 'ReferencingSecurityGroup',
    ];

    public function validate()
    {
        if (\is_array($this->referencingSecurityGroup)) {
            Model::validateArray($this->referencingSecurityGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->referencingSecurityGroup) {
            if (\is_array($this->referencingSecurityGroup)) {
                $res['ReferencingSecurityGroup'] = [];
                $n1                              = 0;
                foreach ($this->referencingSecurityGroup as $item1) {
                    $res['ReferencingSecurityGroup'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['ReferencingSecurityGroup'])) {
            if (!empty($map['ReferencingSecurityGroup'])) {
                $model->referencingSecurityGroup = [];
                $n1                              = 0;
                foreach ($map['ReferencingSecurityGroup'] as $item1) {
                    $model->referencingSecurityGroup[$n1++] = referencingSecurityGroup::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

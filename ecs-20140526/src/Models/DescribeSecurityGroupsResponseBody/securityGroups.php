<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupsResponseBody\securityGroups\securityGroup;

class securityGroups extends Model
{
    /**
     * @var securityGroup[]
     */
    public $securityGroup;
    protected $_name = [
        'securityGroup' => 'SecurityGroup',
    ];

    public function validate()
    {
        if (\is_array($this->securityGroup)) {
            Model::validateArray($this->securityGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->securityGroup) {
            if (\is_array($this->securityGroup)) {
                $res['SecurityGroup'] = [];
                $n1                   = 0;
                foreach ($this->securityGroup as $item1) {
                    $res['SecurityGroup'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SecurityGroup'])) {
            if (!empty($map['SecurityGroup'])) {
                $model->securityGroup = [];
                $n1                   = 0;
                foreach ($map['SecurityGroup'] as $item1) {
                    $model->securityGroup[$n1++] = securityGroup::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Dara\Model;

class securityGroupIds extends Model
{
    /**
     * @var string[]
     */
    public $securityGroupId;
    protected $_name = [
        'securityGroupId' => 'SecurityGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->securityGroupId)) {
            Model::validateArray($this->securityGroupId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->securityGroupId) {
            if (\is_array($this->securityGroupId)) {
                $res['SecurityGroupId'] = [];
                $n1 = 0;
                foreach ($this->securityGroupId as $item1) {
                    $res['SecurityGroupId'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['SecurityGroupId'])) {
            if (!empty($map['SecurityGroupId'])) {
                $model->securityGroupId = [];
                $n1 = 0;
                foreach ($map['SecurityGroupId'] as $item1) {
                    $model->securityGroupId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\networkInterfaceSet;

use AlibabaCloud\Dara\Model;

class securityGroupIds extends Model
{
    /**
     * @var string[]
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
                $n1 = 0;
                foreach ($this->securityGroup as $item1) {
                    $res['SecurityGroup'][$n1] = $item1;
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
        if (isset($map['SecurityGroup'])) {
            if (!empty($map['SecurityGroup'])) {
                $model->securityGroup = [];
                $n1 = 0;
                foreach ($map['SecurityGroup'] as $item1) {
                    $model->securityGroup[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

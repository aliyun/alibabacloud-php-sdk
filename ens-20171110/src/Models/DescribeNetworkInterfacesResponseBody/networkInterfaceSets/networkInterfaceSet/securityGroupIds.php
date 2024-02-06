<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeNetworkInterfacesResponseBody\networkInterfaceSets\networkInterfaceSet;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroup) {
            $res['SecurityGroup'] = $this->securityGroup;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityGroupIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityGroup'])) {
            if (!empty($map['SecurityGroup'])) {
                $model->securityGroup = $map['SecurityGroup'];
            }
        }

        return $model;
    }
}

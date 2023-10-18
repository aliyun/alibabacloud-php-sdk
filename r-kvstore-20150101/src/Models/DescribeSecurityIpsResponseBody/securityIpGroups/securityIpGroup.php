<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeSecurityIpsResponseBody\securityIpGroups;

use AlibabaCloud\Tea\Model;

class securityIpGroup extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to **DescribeSecurityIps**.
     *
     * @example hidden
     *
     * @var string
     */
    public $securityIpGroupAttribute;

    /**
     * @description The name of the security group.
     *
     * @example default
     *
     * @var string
     */
    public $securityIpGroupName;

    /**
     * @description The IP addresses in the whitelist.
     *
     * @example 100.100.202.***\/24,10.10.10.***
     *
     * @var string
     */
    public $securityIpList;
    protected $_name = [
        'securityIpGroupAttribute' => 'SecurityIpGroupAttribute',
        'securityIpGroupName'      => 'SecurityIpGroupName',
        'securityIpList'           => 'SecurityIpList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityIpGroupAttribute) {
            $res['SecurityIpGroupAttribute'] = $this->securityIpGroupAttribute;
        }
        if (null !== $this->securityIpGroupName) {
            $res['SecurityIpGroupName'] = $this->securityIpGroupName;
        }
        if (null !== $this->securityIpList) {
            $res['SecurityIpList'] = $this->securityIpList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityIpGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityIpGroupAttribute'])) {
            $model->securityIpGroupAttribute = $map['SecurityIpGroupAttribute'];
        }
        if (isset($map['SecurityIpGroupName'])) {
            $model->securityIpGroupName = $map['SecurityIpGroupName'];
        }
        if (isset($map['SecurityIpList'])) {
            $model->securityIpList = $map['SecurityIpList'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeSecurityIpsResponseBody\securityIpGroups;

use AlibabaCloud\Tea\Model;

class securityIpGroup extends Model
{
    /**
     * @var string
     */
    public $securityIpGroupAttribute;

    /**
     * @var string
     */
    public $securityIpGroupName;

    /**
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

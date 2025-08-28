<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeSecurityIpsResponseBody\securityIpGroups;

use AlibabaCloud\Dara\Model;

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
        'securityIpGroupName' => 'SecurityIpGroupName',
        'securityIpList' => 'SecurityIpList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

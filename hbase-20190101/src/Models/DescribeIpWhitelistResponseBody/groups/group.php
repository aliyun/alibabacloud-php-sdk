<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeIpWhitelistResponseBody\groups;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeIpWhitelistResponseBody\groups\group\ipList;

class group extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var ipList
     */
    public $ipList;

    /**
     * @var int
     */
    public $ipVersion;
    protected $_name = [
        'groupName' => 'GroupName',
        'ipList' => 'IpList',
        'ipVersion' => 'IpVersion',
    ];

    public function validate()
    {
        if (null !== $this->ipList) {
            $this->ipList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->ipList) {
            $res['IpList'] = null !== $this->ipList ? $this->ipList->toArray($noStream) : $this->ipList;
        }

        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
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
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['IpList'])) {
            $model->ipList = ipList::fromMap($map['IpList']);
        }

        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }

        return $model;
    }
}

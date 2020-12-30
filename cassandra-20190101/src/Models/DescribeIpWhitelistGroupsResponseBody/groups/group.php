<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeIpWhitelistGroupsResponseBody\groups;

use AlibabaCloud\SDK\Cassandra\V20190101\Models\DescribeIpWhitelistGroupsResponseBody\groups\group\ipList;
use AlibabaCloud\Tea\Model;

class group extends Model
{
    /**
     * @var int
     */
    public $ipVersion;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var ipList
     */
    public $ipList;
    protected $_name = [
        'ipVersion' => 'IpVersion',
        'groupName' => 'GroupName',
        'ipList'    => 'IpList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->ipList) {
            $res['IpList'] = null !== $this->ipList ? $this->ipList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return group
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['IpList'])) {
            $model->ipList = ipList::fromMap($map['IpList']);
        }

        return $model;
    }
}

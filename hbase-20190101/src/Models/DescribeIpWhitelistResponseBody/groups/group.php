<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeIpWhitelistResponseBody\groups;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeIpWhitelistResponseBody\groups\group\ipList;
use AlibabaCloud\Tea\Model;

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
        'ipList'    => 'IpList',
        'ipVersion' => 'IpVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->ipList) {
            $res['IpList'] = null !== $this->ipList ? $this->ipList->toMap() : null;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
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

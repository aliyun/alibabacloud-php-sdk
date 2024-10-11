<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeClusterSecurityInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class securityIpGroups extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $groupName;

    /**
     * @example 192.168.xx.xx,192.168.xx.xx
     *
     * @var string
     */
    public $securityIps;
    protected $_name = [
        'groupName'   => 'GroupName',
        'securityIps' => 'SecurityIps',
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
        if (null !== $this->securityIps) {
            $res['SecurityIps'] = $this->securityIps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityIpGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['SecurityIps'])) {
            $model->securityIps = $map['SecurityIps'];
        }

        return $model;
    }
}

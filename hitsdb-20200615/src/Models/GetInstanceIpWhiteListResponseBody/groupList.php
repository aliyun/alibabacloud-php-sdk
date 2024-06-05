<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetInstanceIpWhiteListResponseBody;

use AlibabaCloud\Tea\Model;

class groupList extends Model
{
    /**
     * @description The name of the IP address whitelist.
     *
     * @example test
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The IP addresses in the whitelist.
     *
     * @example 192.168.1.0/24
     *
     * @var string
     */
    public $securityIpList;
    protected $_name = [
        'groupName'      => 'GroupName',
        'securityIpList' => 'SecurityIpList',
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
        if (null !== $this->securityIpList) {
            $res['SecurityIpList'] = $this->securityIpList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['SecurityIpList'])) {
            $model->securityIpList = $map['SecurityIpList'];
        }

        return $model;
    }
}

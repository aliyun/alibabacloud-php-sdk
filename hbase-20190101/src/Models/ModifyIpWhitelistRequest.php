<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ModifyIpWhitelistRequest extends Model
{
    /**
     * @example ld-bp1uoihlf82e8****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example group_01
     *
     * @var string
     */
    public $groupName;

    /**
     * @example 42.120.XX.XX
     *
     * @var string
     */
    public $ipList;

    /**
     * @example 4
     *
     * @var string
     */
    public $ipVersion;
    protected $_name = [
        'clusterId' => 'ClusterId',
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
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->ipList) {
            $res['IpList'] = $this->ipList;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyIpWhitelistRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['IpList'])) {
            $model->ipList = $map['IpList'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DeleteGlobalSecurityIPGroupResponseBody;

use AlibabaCloud\Tea\Model;

class globalSecurityIPGroup extends Model
{
    /**
     * @description The clusters that are associated with the IP address whitelist template.
     *
     * @var string[]
     */
    public $DBInstances;

    /**
     * @description The IP address in the whitelist template.
     *
     * >  Multiple IP addresses are separated by commas (,). You can create up to 1,000 IP addresses or CIDR blocks for all IP whitelists.
     * @example 192.168.0.1
     *
     * @var string
     */
    public $GIpList;

    /**
     * @description The name of the global IP whitelist template. The name must meet the following requirements:
     *
     *   The name can contain lowercase letters, digits, and underscores (\_).
     *   The name must start with a letter and end with a letter or a digit.
     *   The name must be 2 to 120 characters in length.
     *
     * @example test_123
     *
     * @var string
     */
    public $globalIgName;

    /**
     * @description The ID of the global IP whitelist template.
     *
     * @example g-zsldxfiwjmti0kcm****
     *
     * @var string
     */
    public $globalSecurityGroupId;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBInstances'           => 'DBInstances',
        'GIpList'               => 'GIpList',
        'globalIgName'          => 'GlobalIgName',
        'globalSecurityGroupId' => 'GlobalSecurityGroupId',
        'regionId'              => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstances) {
            $res['DBInstances'] = $this->DBInstances;
        }
        if (null !== $this->GIpList) {
            $res['GIpList'] = $this->GIpList;
        }
        if (null !== $this->globalIgName) {
            $res['GlobalIgName'] = $this->globalIgName;
        }
        if (null !== $this->globalSecurityGroupId) {
            $res['GlobalSecurityGroupId'] = $this->globalSecurityGroupId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return globalSecurityIPGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstances'])) {
            if (!empty($map['DBInstances'])) {
                $model->DBInstances = $map['DBInstances'];
            }
        }
        if (isset($map['GIpList'])) {
            $model->GIpList = $map['GIpList'];
        }
        if (isset($map['GlobalIgName'])) {
            $model->globalIgName = $map['GlobalIgName'];
        }
        if (isset($map['GlobalSecurityGroupId'])) {
            $model->globalSecurityGroupId = $map['GlobalSecurityGroupId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

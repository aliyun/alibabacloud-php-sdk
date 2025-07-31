<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeGlobalSecurityIPGroupResponseBody;

use AlibabaCloud\Tea\Model;

class globalSecurityIPGroup extends Model
{
    /**
     * @description The instances associated with the global whitelist template.
     *
     * @var string[]
     */
    public $DBInstances;

    /**
     * @description The IP addresses in the whitelist template.
     *
     * > Separate multiple IP addresses with commas (,). You can create up to 1,000 IP addresses or CIDR blocks for all IP address whitelists.
     *
     * @example 117.12.202.19
     *
     * @var string
     */
    public $GIpList;

    /**
     * @description The name of the IP whitelist template.
     *
     * @example dev_baoxian_k8s_bj
     *
     * @var string
     */
    public $globalIgName;

    /**
     * @description The ID of the IP whitelist template.
     *
     * @example g-sdgwqyp4f5j1x3qk7yvm
     *
     * @var string
     */
    public $globalSecurityGroupId;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBInstances' => 'DBInstances',
        'GIpList' => 'GIpList',
        'globalIgName' => 'GlobalIgName',
        'globalSecurityGroupId' => 'GlobalSecurityGroupId',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

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

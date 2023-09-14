<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class NodeAttributes extends Model
{
    /**
     * @description ECS ssh登录秘钥。
     *
     * @example emr_login
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description ECS访问资源绑定的角色。
     *
     * @example AliyunECSInstanceForEMRRole
     *
     * @var string
     */
    public $ramRole;

    /**
     * @description 安全组ID。EMR只支持普通安全组，不支持企业安全组。
     *
     * @example sg-hp3abbae8lb6lmb1****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description 专有网络ID。
     *
     * @example vpc-bp1tgey2p0ytxmdo5****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description 可用区ID。
     *
     * @example cn-beijing-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'keyPairName'     => 'KeyPairName',
        'ramRole'         => 'RamRole',
        'securityGroupId' => 'SecurityGroupId',
        'vpcId'           => 'VpcId',
        'zoneId'          => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->ramRole) {
            $res['RamRole'] = $this->ramRole;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NodeAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['RamRole'])) {
            $model->ramRole = $map['RamRole'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}

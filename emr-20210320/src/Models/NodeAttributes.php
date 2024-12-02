<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class NodeAttributes extends Model
{
    /**
     * @description 是否启用云盘加密。取值范围：
     * 默认值：false，不加密
     * @example false
     *
     * @var bool
     */
    public $dataDiskEncrypted;

    /**
     * @description KMS加密秘钥ID。
     *
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40****
     *
     * @var string
     */
    public $dataDiskKMSKeyId;

    /**
     * @description ECS ssh登录秘钥。
     *
     * @example emr_login
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description MASTER节点root密码。
     *
     * @example Adxefswfd****
     *
     * @var string
     */
    public $masterRootPassword;

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
     * This parameter is required.
     * @example sg-hp3abbae8lb6lmb1****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description 是否启用云盘加密。取值范围：
     * 默认值：false，不加密
     * @example false
     *
     * @var bool
     */
    public $systemDiskEncrypted;

    /**
     * @description KMS加密秘钥ID。
     *
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40****
     *
     * @var string
     */
    public $systemDiskKMSKeyId;

    /**
     * @description 专有网络ID。
     *
     * This parameter is required.
     * @example vpc-bp1tgey2p0ytxmdo5****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description 可用区ID。
     *
     * This parameter is required.
     * @example cn-beijing-h
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'dataDiskEncrypted'   => 'DataDiskEncrypted',
        'dataDiskKMSKeyId'    => 'DataDiskKMSKeyId',
        'keyPairName'         => 'KeyPairName',
        'masterRootPassword'  => 'MasterRootPassword',
        'ramRole'             => 'RamRole',
        'securityGroupId'     => 'SecurityGroupId',
        'systemDiskEncrypted' => 'SystemDiskEncrypted',
        'systemDiskKMSKeyId'  => 'SystemDiskKMSKeyId',
        'vpcId'               => 'VpcId',
        'zoneId'              => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDiskEncrypted) {
            $res['DataDiskEncrypted'] = $this->dataDiskEncrypted;
        }
        if (null !== $this->dataDiskKMSKeyId) {
            $res['DataDiskKMSKeyId'] = $this->dataDiskKMSKeyId;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->masterRootPassword) {
            $res['MasterRootPassword'] = $this->masterRootPassword;
        }
        if (null !== $this->ramRole) {
            $res['RamRole'] = $this->ramRole;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->systemDiskEncrypted) {
            $res['SystemDiskEncrypted'] = $this->systemDiskEncrypted;
        }
        if (null !== $this->systemDiskKMSKeyId) {
            $res['SystemDiskKMSKeyId'] = $this->systemDiskKMSKeyId;
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
        if (isset($map['DataDiskEncrypted'])) {
            $model->dataDiskEncrypted = $map['DataDiskEncrypted'];
        }
        if (isset($map['DataDiskKMSKeyId'])) {
            $model->dataDiskKMSKeyId = $map['DataDiskKMSKeyId'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['MasterRootPassword'])) {
            $model->masterRootPassword = $map['MasterRootPassword'];
        }
        if (isset($map['RamRole'])) {
            $model->ramRole = $map['RamRole'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SystemDiskEncrypted'])) {
            $model->systemDiskEncrypted = $map['SystemDiskEncrypted'];
        }
        if (isset($map['SystemDiskKMSKeyId'])) {
            $model->systemDiskKMSKeyId = $map['SystemDiskKMSKeyId'];
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

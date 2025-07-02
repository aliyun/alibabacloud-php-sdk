<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class NodeAttributes extends Model
{
    /**
     * @var bool
     */
    public $dataDiskEncrypted;

    /**
     * @var string
     */
    public $dataDiskKMSKeyId;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $masterRootPassword;

    /**
     * @var string
     */
    public $ramRole;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var bool
     */
    public $systemDiskEncrypted;

    /**
     * @var string
     */
    public $systemDiskKMSKeyId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'dataDiskEncrypted' => 'DataDiskEncrypted',
        'dataDiskKMSKeyId' => 'DataDiskKMSKeyId',
        'keyPairName' => 'KeyPairName',
        'masterRootPassword' => 'MasterRootPassword',
        'ramRole' => 'RamRole',
        'securityGroupId' => 'SecurityGroupId',
        'systemDiskEncrypted' => 'SystemDiskEncrypted',
        'systemDiskKMSKeyId' => 'SystemDiskKMSKeyId',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetNetworkAccessEndpointResponseBody\networkAccessEndpoint;

use AlibabaCloud\Dara\Model;

class backupVpcEndpoint extends Model
{
    /**
     * @var string[]
     */
    public $backupEgressPrivateIpAddresses;

    /**
     * @var string[]
     */
    public $backupEgressPublicIpAddresses;

    /**
     * @var string
     */
    public $backupSecurityGroupId;

    /**
     * @var string[]
     */
    public $backupVSwitchIds;

    /**
     * @var string
     */
    public $backupVpcId;

    /**
     * @var string
     */
    public $backupVpcRegionId;
    protected $_name = [
        'backupEgressPrivateIpAddresses' => 'BackupEgressPrivateIpAddresses',
        'backupEgressPublicIpAddresses' => 'BackupEgressPublicIpAddresses',
        'backupSecurityGroupId' => 'BackupSecurityGroupId',
        'backupVSwitchIds' => 'BackupVSwitchIds',
        'backupVpcId' => 'BackupVpcId',
        'backupVpcRegionId' => 'BackupVpcRegionId',
    ];

    public function validate()
    {
        if (\is_array($this->backupEgressPrivateIpAddresses)) {
            Model::validateArray($this->backupEgressPrivateIpAddresses);
        }
        if (\is_array($this->backupEgressPublicIpAddresses)) {
            Model::validateArray($this->backupEgressPublicIpAddresses);
        }
        if (\is_array($this->backupVSwitchIds)) {
            Model::validateArray($this->backupVSwitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupEgressPrivateIpAddresses) {
            if (\is_array($this->backupEgressPrivateIpAddresses)) {
                $res['BackupEgressPrivateIpAddresses'] = [];
                $n1 = 0;
                foreach ($this->backupEgressPrivateIpAddresses as $item1) {
                    $res['BackupEgressPrivateIpAddresses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->backupEgressPublicIpAddresses) {
            if (\is_array($this->backupEgressPublicIpAddresses)) {
                $res['BackupEgressPublicIpAddresses'] = [];
                $n1 = 0;
                foreach ($this->backupEgressPublicIpAddresses as $item1) {
                    $res['BackupEgressPublicIpAddresses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->backupSecurityGroupId) {
            $res['BackupSecurityGroupId'] = $this->backupSecurityGroupId;
        }

        if (null !== $this->backupVSwitchIds) {
            if (\is_array($this->backupVSwitchIds)) {
                $res['BackupVSwitchIds'] = [];
                $n1 = 0;
                foreach ($this->backupVSwitchIds as $item1) {
                    $res['BackupVSwitchIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->backupVpcId) {
            $res['BackupVpcId'] = $this->backupVpcId;
        }

        if (null !== $this->backupVpcRegionId) {
            $res['BackupVpcRegionId'] = $this->backupVpcRegionId;
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
        if (isset($map['BackupEgressPrivateIpAddresses'])) {
            if (!empty($map['BackupEgressPrivateIpAddresses'])) {
                $model->backupEgressPrivateIpAddresses = [];
                $n1 = 0;
                foreach ($map['BackupEgressPrivateIpAddresses'] as $item1) {
                    $model->backupEgressPrivateIpAddresses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BackupEgressPublicIpAddresses'])) {
            if (!empty($map['BackupEgressPublicIpAddresses'])) {
                $model->backupEgressPublicIpAddresses = [];
                $n1 = 0;
                foreach ($map['BackupEgressPublicIpAddresses'] as $item1) {
                    $model->backupEgressPublicIpAddresses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BackupSecurityGroupId'])) {
            $model->backupSecurityGroupId = $map['BackupSecurityGroupId'];
        }

        if (isset($map['BackupVSwitchIds'])) {
            if (!empty($map['BackupVSwitchIds'])) {
                $model->backupVSwitchIds = [];
                $n1 = 0;
                foreach ($map['BackupVSwitchIds'] as $item1) {
                    $model->backupVSwitchIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['BackupVpcId'])) {
            $model->backupVpcId = $map['BackupVpcId'];
        }

        if (isset($map['BackupVpcRegionId'])) {
            $model->backupVpcRegionId = $map['BackupVpcRegionId'];
        }

        return $model;
    }
}

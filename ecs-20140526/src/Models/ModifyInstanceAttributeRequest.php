<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAttributeRequest\cpuOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAttributeRequest\privateDnsNameOptions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAttributeRequest\remoteConnectionOptions;

class ModifyInstanceAttributeRequest extends Model
{
    /**
     * @var cpuOptions
     */
    public $cpuOptions;

    /**
     * @var string
     */
    public $creditSpecification;

    /**
     * @var bool
     */
    public $deletionProtection;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableJumboFrame;

    /**
     * @var bool
     */
    public $enableNetworkEncryption;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $networkInterfaceQueueNumber;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $password;

    /**
     * @var privateDnsNameOptions
     */
    public $privateDnsNameOptions;

    /**
     * @var bool
     */
    public $recyclable;

    /**
     * @var remoteConnectionOptions
     */
    public $remoteConnectionOptions;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'cpuOptions' => 'CpuOptions',
        'creditSpecification' => 'CreditSpecification',
        'deletionProtection' => 'DeletionProtection',
        'description' => 'Description',
        'enableJumboFrame' => 'EnableJumboFrame',
        'enableNetworkEncryption' => 'EnableNetworkEncryption',
        'hostName' => 'HostName',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'networkInterfaceQueueNumber' => 'NetworkInterfaceQueueNumber',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'password' => 'Password',
        'privateDnsNameOptions' => 'PrivateDnsNameOptions',
        'recyclable' => 'Recyclable',
        'remoteConnectionOptions' => 'RemoteConnectionOptions',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'securityGroupIds' => 'SecurityGroupIds',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        if (null !== $this->cpuOptions) {
            $this->cpuOptions->validate();
        }
        if (null !== $this->privateDnsNameOptions) {
            $this->privateDnsNameOptions->validate();
        }
        if (null !== $this->remoteConnectionOptions) {
            $this->remoteConnectionOptions->validate();
        }
        if (\is_array($this->securityGroupIds)) {
            Model::validateArray($this->securityGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuOptions) {
            $res['CpuOptions'] = null !== $this->cpuOptions ? $this->cpuOptions->toArray($noStream) : $this->cpuOptions;
        }

        if (null !== $this->creditSpecification) {
            $res['CreditSpecification'] = $this->creditSpecification;
        }

        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enableJumboFrame) {
            $res['EnableJumboFrame'] = $this->enableJumboFrame;
        }

        if (null !== $this->enableNetworkEncryption) {
            $res['EnableNetworkEncryption'] = $this->enableNetworkEncryption;
        }

        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->networkInterfaceQueueNumber) {
            $res['NetworkInterfaceQueueNumber'] = $this->networkInterfaceQueueNumber;
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->privateDnsNameOptions) {
            $res['PrivateDnsNameOptions'] = null !== $this->privateDnsNameOptions ? $this->privateDnsNameOptions->toArray($noStream) : $this->privateDnsNameOptions;
        }

        if (null !== $this->recyclable) {
            $res['Recyclable'] = $this->recyclable;
        }

        if (null !== $this->remoteConnectionOptions) {
            $res['RemoteConnectionOptions'] = null !== $this->remoteConnectionOptions ? $this->remoteConnectionOptions->toArray($noStream) : $this->remoteConnectionOptions;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->securityGroupIds) {
            if (\is_array($this->securityGroupIds)) {
                $res['SecurityGroupIds'] = [];
                $n1 = 0;
                foreach ($this->securityGroupIds as $item1) {
                    $res['SecurityGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['CpuOptions'])) {
            $model->cpuOptions = cpuOptions::fromMap($map['CpuOptions']);
        }

        if (isset($map['CreditSpecification'])) {
            $model->creditSpecification = $map['CreditSpecification'];
        }

        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnableJumboFrame'])) {
            $model->enableJumboFrame = $map['EnableJumboFrame'];
        }

        if (isset($map['EnableNetworkEncryption'])) {
            $model->enableNetworkEncryption = $map['EnableNetworkEncryption'];
        }

        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['NetworkInterfaceQueueNumber'])) {
            $model->networkInterfaceQueueNumber = $map['NetworkInterfaceQueueNumber'];
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['PrivateDnsNameOptions'])) {
            $model->privateDnsNameOptions = privateDnsNameOptions::fromMap($map['PrivateDnsNameOptions']);
        }

        if (isset($map['Recyclable'])) {
            $model->recyclable = $map['Recyclable'];
        }

        if (isset($map['RemoteConnectionOptions'])) {
            $model->remoteConnectionOptions = remoteConnectionOptions::fromMap($map['RemoteConnectionOptions']);
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = [];
                $n1 = 0;
                foreach ($map['SecurityGroupIds'] as $item1) {
                    $model->securityGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}

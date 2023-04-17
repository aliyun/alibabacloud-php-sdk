<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyInstanceAttributeRequest\remoteConnectionOptions;
use AlibabaCloud\Tea\Model;

class ModifyInstanceAttributeRequest extends Model
{
    /**
     * @description The performance mode of the burstable instance. Valid values:
     *
     *   Standard: standard mode
     *   Unlimited: unlimited mode
     *
     * For more information about the performance modes of burstable instances, see [Burstable instances](~~59977~~).
     * @example Standard
     *
     * @var string
     */
    public $creditSpecification;

    /**
     * @description The release protection attribute of the instance. This parameter specifies whether you can use the ECS console or call the [DeleteInstance](~~25507~~) operation to release the instance.
     *
     * > This parameter is applicable to only pay-as-you-go instances. It can protect instances against manual releases, but not against automatic releases.
     * @example false
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description The description of the instance. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * This parameter is empty by default.
     * @example testInstanceDescription
     *
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableJumboFrame;

    /**
     * @description The hostname of the instance. Take note of the following items:
     *
     *   When you modify the hostname of an instance, the instance must not be in the Creating (Pending) or Starting (Starting) state. Otherwise, the new hostname and the configurations in `/etc/hosts` cannot take effect. You can call the [DescribeInstances](~~25506~~) operation to query the state of the instance.
     *   After the hostname is modified, you must call the [RebootInstance](~~25502~~) operation to restart the instance for the new hostname to take effect.
     *
     * The following limits apply to the hostnames of instances that run different operating systems:
     *
     *   For Windows Server, the hostname must be 2 to 15 characters in length and can contain letters, digits, and hyphens (-). It cannot start or end with a hyphen (-), contain consecutive hyphens (-), or contain only digits.
     *   For other operating systems such as Linux, the hostname must be 2 to 64 characters in length. You can use periods (.) to separate a hostname into multiple segments. Each segment can contain letters, digits, and hyphens (-). The hostname cannot contain consecutive periods (.) or hyphens (-). It cannot start or end with a period (.) or a hyphen (-).
     *
     * @example testHostName
     *
     * @var string
     */
    public $hostName;

    /**
     * @description The ID of the instance.
     *
     * @example i-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance. The name must be 2 to 128 characters in length. It must start with a letter and cannot start with `http://` or `https://`. It can contain letters, digits, colons (:), underscores (\_), and hyphens (-).
     *
     * @example testInstanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The number of queues supported by the primary ENI.
     *
     * @example 8
     *
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
     * @description The password of the instance. The password must be 8 to 30 characters in length and contain at least three of the following character types: uppercase letters, lowercase letters, digits, and special characters. Special characters include:
     *
     * ()`~!@#$%^&*-_+=|{}[]:;\"<>,.?/
     *
     * > If the `Password` parameter is specified, we recommend that you send requests over HTTPS to prevent password leaks.
     * @example Test123456
     *
     * @var string
     */
    public $password;

    /**
     * @description > This parameter is in invitational preview and unavailable for general users.
     *
     * @example hide
     *
     * @var bool
     */
    public $recyclable;

    /**
     * @description > This parameter is in invitational preview and unavailable for general users.
     *
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
     * @description The IDs of replacement security groups.
     *
     *   All security group IDs must be unique.
     *   The instance is moved from the current security groups to the replacement security groups. If you want the instance to remain in the current security groups, you must add the IDs of the current security groups to the list.
     *   You can move the instance to security groups of a different type. However, the list cannot contain the IDs of both basic and advanced security groups.
     *   The specified security group and instance must belong to the same virtual private cloud (VPC).
     *   The valid values of N are based on the maximum number of security groups to which the instance can belong. For more information, see [Limits](~~25412#SecurityGroupQuota1~~).
     *   New security groups become valid for corresponding instances after a short latency.
     *
     * @example sg-bp15ed6xe1yxeycg7o****
     *
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @description The user data of the instance. User data must be encoded in Base64.
     *
     * The size of the user data cannot exceed 16 KB before it is encoded in Base64. We recommend that you do not pass in confidential information such as passwords and private keys in the plaintext format. If you must pass in confidential information, we recommend that you encrypt and Base64-encode the information before you pass it in. Then you can decode and decrypt the information in the same way within the instance.
     * @example ZWNobyBoZWxsbyBlY3Mh
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'creditSpecification'         => 'CreditSpecification',
        'deletionProtection'          => 'DeletionProtection',
        'description'                 => 'Description',
        'enableJumboFrame'            => 'EnableJumboFrame',
        'hostName'                    => 'HostName',
        'instanceId'                  => 'InstanceId',
        'instanceName'                => 'InstanceName',
        'networkInterfaceQueueNumber' => 'NetworkInterfaceQueueNumber',
        'ownerAccount'                => 'OwnerAccount',
        'ownerId'                     => 'OwnerId',
        'password'                    => 'Password',
        'recyclable'                  => 'Recyclable',
        'remoteConnectionOptions'     => 'RemoteConnectionOptions',
        'resourceOwnerAccount'        => 'ResourceOwnerAccount',
        'resourceOwnerId'             => 'ResourceOwnerId',
        'securityGroupIds'            => 'SecurityGroupIds',
        'userData'                    => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->recyclable) {
            $res['Recyclable'] = $this->recyclable;
        }
        if (null !== $this->remoteConnectionOptions) {
            $res['RemoteConnectionOptions'] = null !== $this->remoteConnectionOptions ? $this->remoteConnectionOptions->toMap() : null;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyInstanceAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}

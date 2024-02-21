<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudphone\V20201230\Models;

use AlibabaCloud\SDK\Cloudphone\V20201230\Models\UpdateInstanceAttributeRequest\tag;
use AlibabaCloud\Tea\Model;

class UpdateInstanceAttributeRequest extends Model
{
    /**
     * @description The instance description. The description must be 2 to 256 characters in length and cannot start with `http://` or `https://`.
     *
     * @example myDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The instance ID.
     *
     * @example cp-bp67acfmxazb4p***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance name. The name must be 2 to 128 characters in length. It must start with a letter and cannot start with `http://` or `https://`. The name can contain letters, digits, colons (:), underscores (\_), and hyphens (-).
     *
     * @example myInstanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The name of the key pair that is used to connect to the instance. To improve the security of an instance, we recommend that you use a key pair to connect to the instance.
     *
     * @example myKeyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The instance resolution.
     *
     * @example 1920*1080
     *
     * @var string
     */
    public $resolution;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description Details of tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The VNC password of the instance. The password must be six characters in length and can contain only uppercase letters, lowercase letters, and digits.
     *
     * @example Cp1234
     *
     * @var string
     */
    public $vncPassword;
    protected $_name = [
        'description'          => 'Description',
        'instanceId'           => 'InstanceId',
        'instanceName'         => 'InstanceName',
        'keyPairName'          => 'KeyPairName',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resolution'           => 'Resolution',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'tag'                  => 'Tag',
        'vncPassword'          => 'VncPassword',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vncPassword) {
            $res['VncPassword'] = $this->vncPassword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateInstanceAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VncPassword'])) {
            $model->vncPassword = $map['VncPassword'];
        }

        return $model;
    }
}

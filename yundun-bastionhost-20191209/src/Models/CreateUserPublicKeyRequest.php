<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class CreateUserPublicKeyRequest extends Model
{
    /**
     * @description The description of the public key. The description can be up to 500 characters in length.
     *
     * @example comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ID of the bastion host on which you want to create a public key for the user.
     *
     * > You can call the [listinstances](~~204522~~) operation to query the ID of the bastion host.
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The public key. Encode the value by using the Base64 algorithm.
     *
     * @example c3NoLWVkMjU1MTkgQUFBQUMzTnphQzFsWkRJMU5URTVBQUFBSUxGQnQxUUpyT3IxK2hTTGRkbERMZUx4WGRIZ3hBalBxWHJIbWNFNWxqSk8gbm93Y29kZXJAbm93Y29kZXJkZU1hY0Jvb2stUHJvLmxvY2Fs
     *
     * @var string
     */
    public $publicKey;

    /**
     * @description The name of the public key.
     *
     * @example Public key of a user
     *
     * @var string
     */
    public $publicKeyName;

    /**
     * @description Specifies the region ID of the bastion host on which you want to create a public key for the user.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](~~40654~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies the ID of the user for whom you want to create a public key.
     *
     * @example 1
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'comment'       => 'Comment',
        'instanceId'    => 'InstanceId',
        'publicKey'     => 'PublicKey',
        'publicKeyName' => 'PublicKeyName',
        'regionId'      => 'RegionId',
        'userId'        => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->publicKey) {
            $res['PublicKey'] = $this->publicKey;
        }
        if (null !== $this->publicKeyName) {
            $res['PublicKeyName'] = $this->publicKeyName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUserPublicKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PublicKey'])) {
            $model->publicKey = $map['PublicKey'];
        }
        if (isset($map['PublicKeyName'])) {
            $model->publicKeyName = $map['PublicKeyName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}

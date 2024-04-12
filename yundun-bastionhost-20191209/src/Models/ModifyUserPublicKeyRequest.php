<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ModifyUserPublicKeyRequest extends Model
{
    /**
     * @description The new description of the user group. The description can be up to 500 characters in length.
     *
     * @example comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ID of the bastion host that is used to modify the public key of the user.
     *
     * > You can call the [describeinstances](~~153281~~) operation to query the ID of the bastion host.
     * @example bastionhost-cn-nif236pmc1u
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The new public key.
     *
     * > The public key must be encoded in Base64.
     * @example c3NoLWVkMjU1MTkgQUFBQUMzTnphQzFsWkRJMU5URTVBQUFBSUhVcjY4UENFYWFzZjFYRVpNYTVsMlNBQytHV3FpeXVsRVpndkV4dmlPM28gcm9vdEA5NjBkMmNhOTcwYjU=
     *
     * @var string
     */
    public $publicKey;

    /**
     * @description The ID of the public key that you want to modify.
     *
     * @example 2
     *
     * @var string
     */
    public $publicKeyId;

    /**
     * @description The name of the public key that you want to modify. This name can be up to 128 characters in length.
     *
     * @example name
     *
     * @var string
     */
    public $publicKeyName;

    /**
     * @description The region ID of the bastion host that is used to modify the public key of the user.
     *
     * > For more information about the mapping between region IDs and region names, see [Regions and zones](~~40654~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'comment'       => 'Comment',
        'instanceId'    => 'InstanceId',
        'publicKey'     => 'PublicKey',
        'publicKeyId'   => 'PublicKeyId',
        'publicKeyName' => 'PublicKeyName',
        'regionId'      => 'RegionId',
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
        if (null !== $this->publicKeyId) {
            $res['PublicKeyId'] = $this->publicKeyId;
        }
        if (null !== $this->publicKeyName) {
            $res['PublicKeyName'] = $this->publicKeyName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyUserPublicKeyRequest
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
        if (isset($map['PublicKeyId'])) {
            $model->publicKeyId = $map['PublicKeyId'];
        }
        if (isset($map['PublicKeyName'])) {
            $model->publicKeyName = $map['PublicKeyName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

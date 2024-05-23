<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ModifyTenantEncryptionRequest extends Model
{
    /**
     * @example key-shh322****470h8v0-g2ll85****
     *
     * @var string
     */
    public $encryptionKeyId;

    /**
     * @description This parameter is required.
     *
     * @example EncryptionKey
     *
     * @var string
     */
    public $encryptionType;

    /**
     * @description This parameter is required.
     *
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example ob2mr3oae0****
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'encryptionKeyId' => 'EncryptionKeyId',
        'encryptionType'  => 'EncryptionType',
        'instanceId'      => 'InstanceId',
        'tenantId'        => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encryptionKeyId) {
            $res['EncryptionKeyId'] = $this->encryptionKeyId;
        }
        if (null !== $this->encryptionType) {
            $res['EncryptionType'] = $this->encryptionType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTenantEncryptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncryptionKeyId'])) {
            $model->encryptionKeyId = $map['EncryptionKeyId'];
        }
        if (isset($map['EncryptionType'])) {
            $model->encryptionType = $map['EncryptionType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}

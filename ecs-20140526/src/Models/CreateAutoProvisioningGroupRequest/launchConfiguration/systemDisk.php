<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupRequest\launchConfiguration;

use AlibabaCloud\Tea\Model;

class systemDisk extends Model
{
    /**
     * @description > This parameter is in invitational preview and is unavailable.
     *
     * @example aes-256
     *
     * @var string
     */
    public $encryptAlgorithm;

    /**
     * @description Specifies whether to encrypt the disk. Valid values:
     *
     *   true: encrypts the disk.
     *   false: does not encrypt the disk.
     *
     * Default value: false.
     * @example false
     *
     * @var string
     */
    public $encrypted;

    /**
     * @description The ID of the Key Management Service (KMS) key used by the cloud disk.
     *
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40****
     *
     * @var string
     */
    public $KMSKeyId;
    protected $_name = [
        'encryptAlgorithm' => 'EncryptAlgorithm',
        'encrypted'        => 'Encrypted',
        'KMSKeyId'         => 'KMSKeyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encryptAlgorithm) {
            $res['EncryptAlgorithm'] = $this->encryptAlgorithm;
        }
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return systemDisk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncryptAlgorithm'])) {
            $model->encryptAlgorithm = $map['EncryptAlgorithm'];
        }
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }

        return $model;
    }
}

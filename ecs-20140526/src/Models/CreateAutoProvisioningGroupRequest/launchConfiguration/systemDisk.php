<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupRequest\launchConfiguration;

use AlibabaCloud\Tea\Model;

class systemDisk extends Model
{
    /**
     * @var bool
     */
    public $burstingEnabled;

    /**
     * @description The algorithm to use to encrypt the system disk. Valid values:
     *
     *   aes-256
     *   sm4-128
     *
     * Default value: aes-256.
     *
     * When both LaunchTemplateId and LaunchConfiguration.\* parameters are specified, LaunchTemplateId takes precedence.
     * @example aes-256
     *
     * @var string
     */
    public $encryptAlgorithm;

    /**
     * @description Specifies whether to encrypt system disk N. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     *
     * When both LaunchTemplateId and LaunchConfiguration.\* parameters are specified, LaunchTemplateId takes precedence.
     * @example false
     *
     * @var string
     */
    public $encrypted;

    /**
     * @description The ID of the KMS key to use for the system disk.
     *
     * When both LaunchTemplateId and LaunchConfiguration.\* parameters are specified, LaunchTemplateId takes precedence.
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40****
     *
     * @var string
     */
    public $KMSKeyId;

    /**
     * @var int
     */
    public $provisionedIops;
    protected $_name = [
        'burstingEnabled'  => 'BurstingEnabled',
        'encryptAlgorithm' => 'EncryptAlgorithm',
        'encrypted'        => 'Encrypted',
        'KMSKeyId'         => 'KMSKeyId',
        'provisionedIops'  => 'ProvisionedIops',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->burstingEnabled) {
            $res['BurstingEnabled'] = $this->burstingEnabled;
        }
        if (null !== $this->encryptAlgorithm) {
            $res['EncryptAlgorithm'] = $this->encryptAlgorithm;
        }
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }
        if (null !== $this->provisionedIops) {
            $res['ProvisionedIops'] = $this->provisionedIops;
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
        if (isset($map['BurstingEnabled'])) {
            $model->burstingEnabled = $map['BurstingEnabled'];
        }
        if (isset($map['EncryptAlgorithm'])) {
            $model->encryptAlgorithm = $map['EncryptAlgorithm'];
        }
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }
        if (isset($map['ProvisionedIops'])) {
            $model->provisionedIops = $map['ProvisionedIops'];
        }

        return $model;
    }
}

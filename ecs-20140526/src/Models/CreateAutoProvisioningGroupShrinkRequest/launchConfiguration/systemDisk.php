<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateAutoProvisioningGroupShrinkRequest\launchConfiguration;

use AlibabaCloud\Tea\Model;

class systemDisk extends Model
{
    /**
     * @description The ID of the automatic snapshot policy to apply to the system disk.
     *
     * When you specify this parameter, take note of the following items:
     *
     *   This parameter takes effect only when the AutoProvisioningGroupType parameter is set to instant.
     *
     * @example sp-bp67acfmxazb4p****
     *
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @description Specifies whether to enable the performance burst feature for the system disk. Valid values:
     *
     *   true: force attaches the disk to the instance.
     *   false: disables the performance burst feature for the system disk.
     *
     * >  This parameter is available only if you set `LaunchConfiguration.SystemDisk.Category` to `cloud_auto`. For more information, see [ESSD AutoPL disks](https://help.aliyun.com/document_detail/368372.html).
     *
     * @example false
     *
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
     * When both LaunchTemplateId and LaunchConfiguration.\\* parameters are specified, LaunchTemplateId takes precedence.
     *
     * >  This parameter is not publicly available.
     *
     * @example aes-256
     *
     * @var string
     */
    public $encryptAlgorithm;

    /**
     * @description Specifies whether to encrypt the system disk. Valid values:
     *
     *   true: encrypts system disk N.
     *   false: does not encrypt system disk N.
     *
     * Default value: false. Valid values:
     *
     * When both LaunchTemplateId and LaunchConfiguration.\\* parameters are specified, LaunchTemplateId takes precedence.
     *
     * @example false
     *
     * @var string
     */
    public $encrypted;

    /**
     * @description The ID of the KMS key to use for system disk N.
     *
     * When both LaunchTemplateId and LaunchConfiguration.\\* parameters are specified, LaunchTemplateId takes precedence.
     *
     * @example 0e478b7a-4262-4802-b8cb-00d3fb40****
     *
     * @var string
     */
    public $KMSKeyId;

    /**
     * @description The provisioned read/write IOPS of the ESSD AutoPL disk to use as the system disk. Valid values: 0 to min{50,000, 1,000 × Capacity - Baseline IOPS}.
     *
     * Baseline IOPS = min{1,800 + 50 × Capacity, 50,000}.
     *
     * >  This parameter is available only if you set LaunchConfiguration.SystemDisk.Category to cloud_auto. For more information, see [ESSD AutoPL disks](https://help.aliyun.com/document_detail/368372.html).
     *
     * @example 40000
     *
     * @var int
     */
    public $provisionedIops;
    protected $_name = [
        'autoSnapshotPolicyId' => 'AutoSnapshotPolicyId',
        'burstingEnabled' => 'BurstingEnabled',
        'encryptAlgorithm' => 'EncryptAlgorithm',
        'encrypted' => 'Encrypted',
        'KMSKeyId' => 'KMSKeyId',
        'provisionedIops' => 'ProvisionedIops',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoSnapshotPolicyId) {
            $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        }
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
        if (isset($map['AutoSnapshotPolicyId'])) {
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\advancedOptions;

use AlibabaCloud\Tea\Model;

class udmDetail extends Model
{
    /**
     * @description 是否创建应用一致性。仅云盘类型全部为ESSD时，支持创建快照应用一致性。
     *
     * @example false
     *
     * @var bool
     */
    public $appConsistent;

    /**
     * @description The custom KMS key ID in the destination region. When this field is not empty and cross-region replication is enabled, the specified key will be used for encrypting the cross-region replication.
     *
     * @example 4ed37b1e-da51-4187-aceb-9db4f9b7148b
     *
     * @var string
     */
    public $destinationKmsKeyId;

    /**
     * @description List of disk IDs that need protection. This value is empty when protecting all disks.
     *
     * @var string[]
     */
    public $diskIdList;

    /**
     * @description This parameter is required when **AppConsistent** is **true**. It indicates whether to use the Linux FsFreeze mechanism to ensure the file system is in a read-only consistent state before creating an application-consistent snapshot. The default value is true.
     *
     * @example true
     *
     * @var bool
     */
    public $enableFsFreeze;

    /**
     * @description This parameter is required when **AppConsistent** is **true**. It determines whether to set an application-consistent snapshot:
     * - **true**: Create an application-consistent snapshot
     * - **false**: Create a file system-consistent snapshot
     *
     * The default value is true.
     * @example true
     *
     * @var bool
     */
    public $enableWriters;

    /**
     * @description List of disk IDs that do not need protection. This parameter is ignored if DiskIdList is not empty.
     *
     * @var string[]
     */
    public $excludeDiskIdList;

    /**
     * @description This parameter is required when **AppConsistent** is **true**. It specifies the path of the unfreeze script to be executed after creating an application-consistent snapshot.
     *
     * @example /tmp/postscript.sh
     *
     * @var string
     */
    public $postScriptPath;

    /**
     * @description This parameter is required when **AppConsistent** is **true**. It specifies the path of the freeze script to be executed before creating an application-consistent snapshot.
     *
     * @example /tmp/prescript.sh
     *
     * @var string
     */
    public $preScriptPath;

    /**
     * @description This parameter is required when **AppConsistent** is **true**. It specifies the RAM role name needed for creating an application-consistent snapshot.
     *
     * @example AliyunECSInstanceForHbrRole
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description Indicates whether to create a snapshot consistency group. Only supported when all disk types are ESSD.
     *
     * @example true
     *
     * @var bool
     */
    public $snapshotGroup;

    /**
     * @description This parameter is required when **AppConsistent** is **true**. It specifies the IO freeze timeout duration. The default value is 30 seconds.
     *
     * @example 30
     *
     * @var int
     */
    public $timeoutInSeconds;
    protected $_name = [
        'appConsistent'       => 'AppConsistent',
        'destinationKmsKeyId' => 'DestinationKmsKeyId',
        'diskIdList'          => 'DiskIdList',
        'enableFsFreeze'      => 'EnableFsFreeze',
        'enableWriters'       => 'EnableWriters',
        'excludeDiskIdList'   => 'ExcludeDiskIdList',
        'postScriptPath'      => 'PostScriptPath',
        'preScriptPath'       => 'PreScriptPath',
        'ramRoleName'         => 'RamRoleName',
        'snapshotGroup'       => 'SnapshotGroup',
        'timeoutInSeconds'    => 'TimeoutInSeconds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appConsistent) {
            $res['AppConsistent'] = $this->appConsistent;
        }
        if (null !== $this->destinationKmsKeyId) {
            $res['DestinationKmsKeyId'] = $this->destinationKmsKeyId;
        }
        if (null !== $this->diskIdList) {
            $res['DiskIdList'] = $this->diskIdList;
        }
        if (null !== $this->enableFsFreeze) {
            $res['EnableFsFreeze'] = $this->enableFsFreeze;
        }
        if (null !== $this->enableWriters) {
            $res['EnableWriters'] = $this->enableWriters;
        }
        if (null !== $this->excludeDiskIdList) {
            $res['ExcludeDiskIdList'] = $this->excludeDiskIdList;
        }
        if (null !== $this->postScriptPath) {
            $res['PostScriptPath'] = $this->postScriptPath;
        }
        if (null !== $this->preScriptPath) {
            $res['PreScriptPath'] = $this->preScriptPath;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->snapshotGroup) {
            $res['SnapshotGroup'] = $this->snapshotGroup;
        }
        if (null !== $this->timeoutInSeconds) {
            $res['TimeoutInSeconds'] = $this->timeoutInSeconds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return udmDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppConsistent'])) {
            $model->appConsistent = $map['AppConsistent'];
        }
        if (isset($map['DestinationKmsKeyId'])) {
            $model->destinationKmsKeyId = $map['DestinationKmsKeyId'];
        }
        if (isset($map['DiskIdList'])) {
            if (!empty($map['DiskIdList'])) {
                $model->diskIdList = $map['DiskIdList'];
            }
        }
        if (isset($map['EnableFsFreeze'])) {
            $model->enableFsFreeze = $map['EnableFsFreeze'];
        }
        if (isset($map['EnableWriters'])) {
            $model->enableWriters = $map['EnableWriters'];
        }
        if (isset($map['ExcludeDiskIdList'])) {
            if (!empty($map['ExcludeDiskIdList'])) {
                $model->excludeDiskIdList = $map['ExcludeDiskIdList'];
            }
        }
        if (isset($map['PostScriptPath'])) {
            $model->postScriptPath = $map['PostScriptPath'];
        }
        if (isset($map['PreScriptPath'])) {
            $model->preScriptPath = $map['PreScriptPath'];
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['SnapshotGroup'])) {
            $model->snapshotGroup = $map['SnapshotGroup'];
        }
        if (isset($map['TimeoutInSeconds'])) {
            $model->timeoutInSeconds = $map['TimeoutInSeconds'];
        }

        return $model;
    }
}

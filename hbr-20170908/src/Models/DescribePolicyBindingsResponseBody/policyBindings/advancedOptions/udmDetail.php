<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\advancedOptions;

use AlibabaCloud\Tea\Model;

class udmDetail extends Model
{
    /**
     * @description Indicates whether application consistency is enabled. You can enable application consistency only if all disks are ESSDs.
     *
     * @example false
     *
     * @var bool
     */
    public $appConsistent;

    /**
     * @example 4ed37b1e-da51-4187-aceb-9db4f9b7148b
     *
     * @var string
     */
    public $destinationKmsKeyId;

    /**
     * @description The IDs of the disks that need to be protected. If all disks need to be protected, this parameter is empty.
     *
     * @var string[]
     */
    public $diskIdList;

    /**
     * @description This parameter is returned only if **AppConsistent** is set to **true**. This parameter indicates whether Linux fsfreeze is enabled to put file systems into the read-only state before application-consistent snapshots are created. Default value: true.
     *
     * @example true
     *
     * @var bool
     */
    public $enableFsFreeze;

    /**
     * @description This parameter is returned only if **AppConsistent** is set to **true**. This parameter indicates whether application-consistent snapshots are created. Valid values:
     *
     *   true: Application-consistent snapshots are created.
     *   false: File system-consistent snapshots are created.
     *
     * Default value: true.
     * @example true
     *
     * @var bool
     */
    public $enableWriters;

    /**
     * @description The IDs of the disks that do not need to be protected. If DiskIdList is not empty, this parameter is ignored.
     *
     * @var string[]
     */
    public $excludeDiskIdList;

    /**
     * @description This parameter is returned only if **AppConsistent** is set to **true**. This parameter indicates the path of the post-thaw scripts that are executed after application-consistent snapshots are created.
     *
     * @example /tmp/postscript.sh
     *
     * @var string
     */
    public $postScriptPath;

    /**
     * @description This parameter is returned only if **AppConsistent** is set to **true**. This parameter indicates the path of the pre-freeze scripts that are executed before application-consistent snapshots are created.
     *
     * @example /tmp/prescript.sh
     *
     * @var string
     */
    public $preScriptPath;

    /**
     * @description This parameter is returned only if **AppConsistent** is set to **true**. This parameter indicates the name of the RAM role that is required to create application-consistent snapshots.
     *
     * @example AliyunECSInstanceForHbrRole
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description Indicates whether a snapshot-consistent group is created. You can create a snapshot-consistent group only if all disks are enhanced SSDs (ESSDs).
     *
     * @example true
     *
     * @var bool
     */
    public $snapshotGroup;

    /**
     * @description This parameter is returned only if **AppConsistent** is set to **true**. This parameter indicates the I/O freeze timeout period. Default value: 30. Unit: seconds.
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

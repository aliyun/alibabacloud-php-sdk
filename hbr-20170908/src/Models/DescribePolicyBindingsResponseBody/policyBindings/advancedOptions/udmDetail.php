<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\advancedOptions;

use AlibabaCloud\Tea\Model;

class udmDetail extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $appConsistent;

    /**
     * @var string
     */
    public $destinationKmsKeyId;

    /**
     * @var string[]
     */
    public $diskIdList;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableFsFreeze;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableWriters;

    /**
     * @var string[]
     */
    public $excludeDiskIdList;

    /**
     * @example /tmp/postscript.sh
     *
     * @var string
     */
    public $postScriptPath;

    /**
     * @example /tmp/prescript.sh
     *
     * @var string
     */
    public $preScriptPath;

    /**
     * @example AliyunECSInstanceForHbrRole
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @example true
     *
     * @var bool
     */
    public $snapshotGroup;

    /**
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

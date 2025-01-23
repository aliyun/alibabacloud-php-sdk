<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribePolicyBindingsResponseBody\policyBindings\advancedOptions;

use AlibabaCloud\Dara\Model;

class udmDetail extends Model
{
    /**
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
     * @var bool
     */
    public $enableFsFreeze;
    /**
     * @var bool
     */
    public $enableWriters;
    /**
     * @var string[]
     */
    public $excludeDiskIdList;
    /**
     * @var string
     */
    public $postScriptPath;
    /**
     * @var string
     */
    public $preScriptPath;
    /**
     * @var string
     */
    public $ramRoleName;
    /**
     * @var bool
     */
    public $snapshotGroup;
    /**
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
        if (\is_array($this->diskIdList)) {
            Model::validateArray($this->diskIdList);
        }
        if (\is_array($this->excludeDiskIdList)) {
            Model::validateArray($this->excludeDiskIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appConsistent) {
            $res['AppConsistent'] = $this->appConsistent;
        }

        if (null !== $this->destinationKmsKeyId) {
            $res['DestinationKmsKeyId'] = $this->destinationKmsKeyId;
        }

        if (null !== $this->diskIdList) {
            if (\is_array($this->diskIdList)) {
                $res['DiskIdList'] = [];
                $n1                = 0;
                foreach ($this->diskIdList as $item1) {
                    $res['DiskIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->enableFsFreeze) {
            $res['EnableFsFreeze'] = $this->enableFsFreeze;
        }

        if (null !== $this->enableWriters) {
            $res['EnableWriters'] = $this->enableWriters;
        }

        if (null !== $this->excludeDiskIdList) {
            if (\is_array($this->excludeDiskIdList)) {
                $res['ExcludeDiskIdList'] = [];
                $n1                       = 0;
                foreach ($this->excludeDiskIdList as $item1) {
                    $res['ExcludeDiskIdList'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->diskIdList = [];
                $n1                = 0;
                foreach ($map['DiskIdList'] as $item1) {
                    $model->diskIdList[$n1++] = $item1;
                }
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
                $model->excludeDiskIdList = [];
                $n1                       = 0;
                foreach ($map['ExcludeDiskIdList'] as $item1) {
                    $model->excludeDiskIdList[$n1++] = $item1;
                }
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

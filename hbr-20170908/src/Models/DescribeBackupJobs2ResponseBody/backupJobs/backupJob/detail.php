<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupJobs2ResponseBody\backupJobs\backupJob;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupJobs2ResponseBody\backupJobs\backupJob\detail\diskNativeSnapshotIdList;

class detail extends Model
{
    /**
     * @var string
     */
    public $destinationNativeSnapshotErrorMessage;

    /**
     * @var string
     */
    public $destinationNativeSnapshotId;

    /**
     * @var int
     */
    public $destinationNativeSnapshotProgress;

    /**
     * @var string
     */
    public $destinationNativeSnapshotStatus;

    /**
     * @var int
     */
    public $destinationRetention;

    /**
     * @var string
     */
    public $destinationSnapshotId;

    /**
     * @var diskNativeSnapshotIdList
     */
    public $diskNativeSnapshotIdList;

    /**
     * @var bool
     */
    public $doCopy;

    /**
     * @var mixed[]
     */
    public $instanceInfos;

    /**
     * @var string
     */
    public $nativeSnapshotId;
    protected $_name = [
        'destinationNativeSnapshotErrorMessage' => 'DestinationNativeSnapshotErrorMessage',
        'destinationNativeSnapshotId' => 'DestinationNativeSnapshotId',
        'destinationNativeSnapshotProgress' => 'DestinationNativeSnapshotProgress',
        'destinationNativeSnapshotStatus' => 'DestinationNativeSnapshotStatus',
        'destinationRetention' => 'DestinationRetention',
        'destinationSnapshotId' => 'DestinationSnapshotId',
        'diskNativeSnapshotIdList' => 'DiskNativeSnapshotIdList',
        'doCopy' => 'DoCopy',
        'instanceInfos' => 'InstanceInfos',
        'nativeSnapshotId' => 'NativeSnapshotId',
    ];

    public function validate()
    {
        if (null !== $this->diskNativeSnapshotIdList) {
            $this->diskNativeSnapshotIdList->validate();
        }
        if (\is_array($this->instanceInfos)) {
            Model::validateArray($this->instanceInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinationNativeSnapshotErrorMessage) {
            $res['DestinationNativeSnapshotErrorMessage'] = $this->destinationNativeSnapshotErrorMessage;
        }

        if (null !== $this->destinationNativeSnapshotId) {
            $res['DestinationNativeSnapshotId'] = $this->destinationNativeSnapshotId;
        }

        if (null !== $this->destinationNativeSnapshotProgress) {
            $res['DestinationNativeSnapshotProgress'] = $this->destinationNativeSnapshotProgress;
        }

        if (null !== $this->destinationNativeSnapshotStatus) {
            $res['DestinationNativeSnapshotStatus'] = $this->destinationNativeSnapshotStatus;
        }

        if (null !== $this->destinationRetention) {
            $res['DestinationRetention'] = $this->destinationRetention;
        }

        if (null !== $this->destinationSnapshotId) {
            $res['DestinationSnapshotId'] = $this->destinationSnapshotId;
        }

        if (null !== $this->diskNativeSnapshotIdList) {
            $res['DiskNativeSnapshotIdList'] = null !== $this->diskNativeSnapshotIdList ? $this->diskNativeSnapshotIdList->toArray($noStream) : $this->diskNativeSnapshotIdList;
        }

        if (null !== $this->doCopy) {
            $res['DoCopy'] = $this->doCopy;
        }

        if (null !== $this->instanceInfos) {
            if (\is_array($this->instanceInfos)) {
                $res['InstanceInfos'] = [];
                foreach ($this->instanceInfos as $key1 => $value1) {
                    $res['InstanceInfos'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->nativeSnapshotId) {
            $res['NativeSnapshotId'] = $this->nativeSnapshotId;
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
        if (isset($map['DestinationNativeSnapshotErrorMessage'])) {
            $model->destinationNativeSnapshotErrorMessage = $map['DestinationNativeSnapshotErrorMessage'];
        }

        if (isset($map['DestinationNativeSnapshotId'])) {
            $model->destinationNativeSnapshotId = $map['DestinationNativeSnapshotId'];
        }

        if (isset($map['DestinationNativeSnapshotProgress'])) {
            $model->destinationNativeSnapshotProgress = $map['DestinationNativeSnapshotProgress'];
        }

        if (isset($map['DestinationNativeSnapshotStatus'])) {
            $model->destinationNativeSnapshotStatus = $map['DestinationNativeSnapshotStatus'];
        }

        if (isset($map['DestinationRetention'])) {
            $model->destinationRetention = $map['DestinationRetention'];
        }

        if (isset($map['DestinationSnapshotId'])) {
            $model->destinationSnapshotId = $map['DestinationSnapshotId'];
        }

        if (isset($map['DiskNativeSnapshotIdList'])) {
            $model->diskNativeSnapshotIdList = diskNativeSnapshotIdList::fromMap($map['DiskNativeSnapshotIdList']);
        }

        if (isset($map['DoCopy'])) {
            $model->doCopy = $map['DoCopy'];
        }

        if (isset($map['InstanceInfos'])) {
            if (!empty($map['InstanceInfos'])) {
                $model->instanceInfos = [];
                foreach ($map['InstanceInfos'] as $key1 => $value1) {
                    $model->instanceInfos[$key1] = $value1;
                }
            }
        }

        if (isset($map['NativeSnapshotId'])) {
            $model->nativeSnapshotId = $map['NativeSnapshotId'];
        }

        return $model;
    }
}

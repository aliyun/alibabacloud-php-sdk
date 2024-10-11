<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models\GetDbfsResponseBody;

use AlibabaCloud\SDK\DBFS\V20200418\Models\GetDbfsResponseBody\DBFSInfo\ebsList;
use AlibabaCloud\SDK\DBFS\V20200418\Models\GetDbfsResponseBody\DBFSInfo\ecsList;
use AlibabaCloud\SDK\DBFS\V20200418\Models\GetDbfsResponseBody\DBFSInfo\snapshotInfo;
use AlibabaCloud\SDK\DBFS\V20200418\Models\GetDbfsResponseBody\DBFSInfo\tags;
use AlibabaCloud\Tea\Model;

class DBFSInfo extends Model
{
    /**
     * @var string
     */
    public $advancedFeatures;

    /**
     * @example 1
     *
     * @var int
     */
    public $attachNodeNumber;

    /**
     * @example standard
     *
     * @var string
     */
    public $category;

    /**
     * @example 1609330367000
     *
     * @var string
     */
    public $createdTime;

    /**
     * @example c39EcDBf-2Ecb-C3C6-6526-018d4Dcf63eD
     *
     * @var string
     */
    public $DBFSClusterId;

    /**
     * @example desc
     *
     * @var string
     */
    public $description;

    /**
     * @var ebsList[]
     */
    public $ebsList;

    /**
     * @var ecsList[]
     */
    public $ecsList;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableRaid;

    /**
     * @example false
     *
     * @var bool
     */
    public $encryption;

    /**
     * @example dbfs-GOrr********Yd0VLOyBpg
     *
     * @var string
     */
    public $fsId;

    /**
     * @example dbfs-test-01
     *
     * @var string
     */
    public $fsName;

    /**
     * @example dbfs.small
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example c39EcDBf-2Ecb-C3C6-6526-018d4D******
     *
     * @var string
     */
    public $KMSKeyId;

    /**
     * @example TargetIsBusy.DBFS
     *
     * @var string
     */
    public $lastFailed;

    /**
     * @example 1644915400000
     *
     * @var string
     */
    public $lastMountTime;

    /**
     * @example 1644915319000
     *
     * @var string
     */
    public $lastUmountTime;

    /**
     * @example postpaid
     *
     * @var string
     */
    public $payType;

    /**
     * @example PL1
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @example 2
     *
     * @var int
     */
    public $raidStrip;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 20
     *
     * @var int
     */
    public $sizeG;

    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var snapshotInfo
     */
    public $snapshotInfo;

    /**
     * @example attached
     *
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example MySQL 5.7
     *
     * @var string
     */
    public $usedScene;

    /**
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'advancedFeatures' => 'AdvancedFeatures',
        'attachNodeNumber' => 'AttachNodeNumber',
        'category'         => 'Category',
        'createdTime'      => 'CreatedTime',
        'DBFSClusterId'    => 'DBFSClusterId',
        'description'      => 'Description',
        'ebsList'          => 'EbsList',
        'ecsList'          => 'EcsList',
        'enableRaid'       => 'EnableRaid',
        'encryption'       => 'Encryption',
        'fsId'             => 'FsId',
        'fsName'           => 'FsName',
        'instanceType'     => 'InstanceType',
        'KMSKeyId'         => 'KMSKeyId',
        'lastFailed'       => 'LastFailed',
        'lastMountTime'    => 'LastMountTime',
        'lastUmountTime'   => 'LastUmountTime',
        'payType'          => 'PayType',
        'performanceLevel' => 'PerformanceLevel',
        'raidStrip'        => 'RaidStrip',
        'regionId'         => 'RegionId',
        'sizeG'            => 'SizeG',
        'snapshotId'       => 'SnapshotId',
        'snapshotInfo'     => 'SnapshotInfo',
        'status'           => 'Status',
        'tags'             => 'Tags',
        'usedScene'        => 'UsedScene',
        'zoneId'           => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advancedFeatures) {
            $res['AdvancedFeatures'] = $this->advancedFeatures;
        }
        if (null !== $this->attachNodeNumber) {
            $res['AttachNodeNumber'] = $this->attachNodeNumber;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->DBFSClusterId) {
            $res['DBFSClusterId'] = $this->DBFSClusterId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->ebsList) {
            $res['EbsList'] = [];
            if (null !== $this->ebsList && \is_array($this->ebsList)) {
                $n = 0;
                foreach ($this->ebsList as $item) {
                    $res['EbsList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ecsList) {
            $res['EcsList'] = [];
            if (null !== $this->ecsList && \is_array($this->ecsList)) {
                $n = 0;
                foreach ($this->ecsList as $item) {
                    $res['EcsList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->enableRaid) {
            $res['EnableRaid'] = $this->enableRaid;
        }
        if (null !== $this->encryption) {
            $res['Encryption'] = $this->encryption;
        }
        if (null !== $this->fsId) {
            $res['FsId'] = $this->fsId;
        }
        if (null !== $this->fsName) {
            $res['FsName'] = $this->fsName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }
        if (null !== $this->lastFailed) {
            $res['LastFailed'] = $this->lastFailed;
        }
        if (null !== $this->lastMountTime) {
            $res['LastMountTime'] = $this->lastMountTime;
        }
        if (null !== $this->lastUmountTime) {
            $res['LastUmountTime'] = $this->lastUmountTime;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->raidStrip) {
            $res['RaidStrip'] = $this->raidStrip;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sizeG) {
            $res['SizeG'] = $this->sizeG;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->snapshotInfo) {
            $res['SnapshotInfo'] = null !== $this->snapshotInfo ? $this->snapshotInfo->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->usedScene) {
            $res['UsedScene'] = $this->usedScene;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBFSInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdvancedFeatures'])) {
            $model->advancedFeatures = $map['AdvancedFeatures'];
        }
        if (isset($map['AttachNodeNumber'])) {
            $model->attachNodeNumber = $map['AttachNodeNumber'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DBFSClusterId'])) {
            $model->DBFSClusterId = $map['DBFSClusterId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EbsList'])) {
            if (!empty($map['EbsList'])) {
                $model->ebsList = [];
                $n              = 0;
                foreach ($map['EbsList'] as $item) {
                    $model->ebsList[$n++] = null !== $item ? ebsList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EcsList'])) {
            if (!empty($map['EcsList'])) {
                $model->ecsList = [];
                $n              = 0;
                foreach ($map['EcsList'] as $item) {
                    $model->ecsList[$n++] = null !== $item ? ecsList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EnableRaid'])) {
            $model->enableRaid = $map['EnableRaid'];
        }
        if (isset($map['Encryption'])) {
            $model->encryption = $map['Encryption'];
        }
        if (isset($map['FsId'])) {
            $model->fsId = $map['FsId'];
        }
        if (isset($map['FsName'])) {
            $model->fsName = $map['FsName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }
        if (isset($map['LastFailed'])) {
            $model->lastFailed = $map['LastFailed'];
        }
        if (isset($map['LastMountTime'])) {
            $model->lastMountTime = $map['LastMountTime'];
        }
        if (isset($map['LastUmountTime'])) {
            $model->lastUmountTime = $map['LastUmountTime'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['RaidStrip'])) {
            $model->raidStrip = $map['RaidStrip'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SizeG'])) {
            $model->sizeG = $map['SizeG'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['SnapshotInfo'])) {
            $model->snapshotInfo = snapshotInfo::fromMap($map['SnapshotInfo']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UsedScene'])) {
            $model->usedScene = $map['UsedScene'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}

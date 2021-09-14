<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models\ListDbfsResponseBody;

use AlibabaCloud\SDK\DBFS\V20200418\Models\ListDbfsResponseBody\DBFSInfo\ebsList;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListDbfsResponseBody\DBFSInfo\ecsList;
use AlibabaCloud\SDK\DBFS\V20200418\Models\ListDbfsResponseBody\DBFSInfo\tags;
use AlibabaCloud\Tea\Model;

class DBFSInfo extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $encryption;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $fsId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var int
     */
    public $sizeG;

    /**
     * @var ecsList[]
     */
    public $ecsList;

    /**
     * @var ebsList[]
     */
    public $ebsList;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $DBFSClusterId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $fsName;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var int
     */
    public $attachNodeNumber;

    /**
     * @var string
     */
    public $KMSKeyId;

    /**
     * @var string
     */
    public $performanceLevel;

    /**
     * @var string
     */
    public $usedScene;

    /**
     * @var string
     */
    public $lastMountTime;

    /**
     * @var string
     */
    public $lastUmountTime;

    /**
     * @var bool
     */
    public $enableRaid;

    /**
     * @var int
     */
    public $raidStrip;
    protected $_name = [
        'status'           => 'Status',
        'encryption'       => 'Encryption',
        'payType'          => 'PayType',
        'fsId'             => 'FsId',
        'tags'             => 'Tags',
        'sizeG'            => 'SizeG',
        'ecsList'          => 'EcsList',
        'ebsList'          => 'EbsList',
        'regionId'         => 'RegionId',
        'DBFSClusterId'    => 'DBFSClusterId',
        'zoneId'           => 'ZoneId',
        'fsName'           => 'FsName',
        'category'         => 'Category',
        'createdTime'      => 'CreatedTime',
        'attachNodeNumber' => 'AttachNodeNumber',
        'KMSKeyId'         => 'KMSKeyId',
        'performanceLevel' => 'PerformanceLevel',
        'usedScene'        => 'UsedScene',
        'lastMountTime'    => 'LastMountTime',
        'lastUmountTime'   => 'LastUmountTime',
        'enableRaid'       => 'EnableRaid',
        'raidStrip'        => 'RaidStrip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->encryption) {
            $res['Encryption'] = $this->encryption;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->fsId) {
            $res['FsId'] = $this->fsId;
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
        if (null !== $this->sizeG) {
            $res['SizeG'] = $this->sizeG;
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
        if (null !== $this->ebsList) {
            $res['EbsList'] = [];
            if (null !== $this->ebsList && \is_array($this->ebsList)) {
                $n = 0;
                foreach ($this->ebsList as $item) {
                    $res['EbsList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->DBFSClusterId) {
            $res['DBFSClusterId'] = $this->DBFSClusterId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->fsName) {
            $res['FsName'] = $this->fsName;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->attachNodeNumber) {
            $res['AttachNodeNumber'] = $this->attachNodeNumber;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->usedScene) {
            $res['UsedScene'] = $this->usedScene;
        }
        if (null !== $this->lastMountTime) {
            $res['LastMountTime'] = $this->lastMountTime;
        }
        if (null !== $this->lastUmountTime) {
            $res['LastUmountTime'] = $this->lastUmountTime;
        }
        if (null !== $this->enableRaid) {
            $res['EnableRaid'] = $this->enableRaid;
        }
        if (null !== $this->raidStrip) {
            $res['RaidStrip'] = $this->raidStrip;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Encryption'])) {
            $model->encryption = $map['Encryption'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['FsId'])) {
            $model->fsId = $map['FsId'];
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
        if (isset($map['SizeG'])) {
            $model->sizeG = $map['SizeG'];
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
        if (isset($map['EbsList'])) {
            if (!empty($map['EbsList'])) {
                $model->ebsList = [];
                $n              = 0;
                foreach ($map['EbsList'] as $item) {
                    $model->ebsList[$n++] = null !== $item ? ebsList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DBFSClusterId'])) {
            $model->DBFSClusterId = $map['DBFSClusterId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['FsName'])) {
            $model->fsName = $map['FsName'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['AttachNodeNumber'])) {
            $model->attachNodeNumber = $map['AttachNodeNumber'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['UsedScene'])) {
            $model->usedScene = $map['UsedScene'];
        }
        if (isset($map['LastMountTime'])) {
            $model->lastMountTime = $map['LastMountTime'];
        }
        if (isset($map['LastUmountTime'])) {
            $model->lastUmountTime = $map['LastUmountTime'];
        }
        if (isset($map['EnableRaid'])) {
            $model->enableRaid = $map['EnableRaid'];
        }
        if (isset($map['RaidStrip'])) {
            $model->raidStrip = $map['RaidStrip'];
        }

        return $model;
    }
}

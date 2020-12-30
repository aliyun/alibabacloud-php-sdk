<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models\DescribeLedgerResponseBody;

use AlibabaCloud\SDK\Ledgerdb\V20191122\Models\DescribeLedgerResponseBody\ledger\lastTimeAnchor;
use AlibabaCloud\Tea\Model;

class ledger extends Model
{
    /**
     * @var string
     */
    public $storageClass;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $journalCount;

    /**
     * @var string
     */
    public $ledgerDescription;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $ledgerType;

    /**
     * @var lastTimeAnchor
     */
    public $lastTimeAnchor;

    /**
     * @var string
     */
    public $ledgerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $memberCount;

    /**
     * @var string
     */
    public $ledgerStatus;

    /**
     * @var int
     */
    public $timeAnchorCount;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $ledgerName;

    /**
     * @var string
     */
    public $ownerAliUid;
    protected $_name = [
        'storageClass'      => 'StorageClass',
        'updateTime'        => 'UpdateTime',
        'journalCount'      => 'JournalCount',
        'ledgerDescription' => 'LedgerDescription',
        'createTime'        => 'CreateTime',
        'ledgerType'        => 'LedgerType',
        'lastTimeAnchor'    => 'LastTimeAnchor',
        'ledgerId'          => 'LedgerId',
        'regionId'          => 'RegionId',
        'memberCount'       => 'MemberCount',
        'ledgerStatus'      => 'LedgerStatus',
        'timeAnchorCount'   => 'TimeAnchorCount',
        'zoneId'            => 'ZoneId',
        'ledgerName'        => 'LedgerName',
        'ownerAliUid'       => 'OwnerAliUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->journalCount) {
            $res['JournalCount'] = $this->journalCount;
        }
        if (null !== $this->ledgerDescription) {
            $res['LedgerDescription'] = $this->ledgerDescription;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->ledgerType) {
            $res['LedgerType'] = $this->ledgerType;
        }
        if (null !== $this->lastTimeAnchor) {
            $res['LastTimeAnchor'] = null !== $this->lastTimeAnchor ? $this->lastTimeAnchor->toMap() : null;
        }
        if (null !== $this->ledgerId) {
            $res['LedgerId'] = $this->ledgerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->memberCount) {
            $res['MemberCount'] = $this->memberCount;
        }
        if (null !== $this->ledgerStatus) {
            $res['LedgerStatus'] = $this->ledgerStatus;
        }
        if (null !== $this->timeAnchorCount) {
            $res['TimeAnchorCount'] = $this->timeAnchorCount;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->ledgerName) {
            $res['LedgerName'] = $this->ledgerName;
        }
        if (null !== $this->ownerAliUid) {
            $res['OwnerAliUid'] = $this->ownerAliUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ledger
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['JournalCount'])) {
            $model->journalCount = $map['JournalCount'];
        }
        if (isset($map['LedgerDescription'])) {
            $model->ledgerDescription = $map['LedgerDescription'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LedgerType'])) {
            $model->ledgerType = $map['LedgerType'];
        }
        if (isset($map['LastTimeAnchor'])) {
            $model->lastTimeAnchor = lastTimeAnchor::fromMap($map['LastTimeAnchor']);
        }
        if (isset($map['LedgerId'])) {
            $model->ledgerId = $map['LedgerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['MemberCount'])) {
            $model->memberCount = $map['MemberCount'];
        }
        if (isset($map['LedgerStatus'])) {
            $model->ledgerStatus = $map['LedgerStatus'];
        }
        if (isset($map['TimeAnchorCount'])) {
            $model->timeAnchorCount = $map['TimeAnchorCount'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['LedgerName'])) {
            $model->ledgerName = $map['LedgerName'];
        }
        if (isset($map['OwnerAliUid'])) {
            $model->ownerAliUid = $map['OwnerAliUid'];
        }

        return $model;
    }
}

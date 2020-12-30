<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models;

use AlibabaCloud\Tea\Model;

class DescribeRestoreRangeInfoRequest extends Model
{
    /**
     * @var string
     */
    public $backupPlanId;

    /**
     * @var int
     */
    public $beginTimestampForRestore;

    /**
     * @var int
     */
    public $endTimestampForRestore;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $recentlyRestore;
    protected $_name = [
        'backupPlanId'             => 'BackupPlanId',
        'beginTimestampForRestore' => 'BeginTimestampForRestore',
        'endTimestampForRestore'   => 'EndTimestampForRestore',
        'ownerId'                  => 'OwnerId',
        'clientToken'              => 'ClientToken',
        'recentlyRestore'          => 'RecentlyRestore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupPlanId) {
            $res['BackupPlanId'] = $this->backupPlanId;
        }
        if (null !== $this->beginTimestampForRestore) {
            $res['BeginTimestampForRestore'] = $this->beginTimestampForRestore;
        }
        if (null !== $this->endTimestampForRestore) {
            $res['EndTimestampForRestore'] = $this->endTimestampForRestore;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->recentlyRestore) {
            $res['RecentlyRestore'] = $this->recentlyRestore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRestoreRangeInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }
        if (isset($map['BeginTimestampForRestore'])) {
            $model->beginTimestampForRestore = $map['BeginTimestampForRestore'];
        }
        if (isset($map['EndTimestampForRestore'])) {
            $model->endTimestampForRestore = $map['EndTimestampForRestore'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['RecentlyRestore'])) {
            $model->recentlyRestore = $map['RecentlyRestore'];
        }

        return $model;
    }
}

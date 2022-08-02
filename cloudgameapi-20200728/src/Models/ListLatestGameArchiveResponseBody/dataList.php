<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListLatestGameArchiveResponseBody;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $archiveId;

    /**
     * @var string
     */
    public $archiveTime;

    /**
     * @var string
     */
    public $gameId;

    /**
     * @var int
     */
    public $tagStatus;
    protected $_name = [
        'accountId'   => 'AccountId',
        'archiveId'   => 'ArchiveId',
        'archiveTime' => 'ArchiveTime',
        'gameId'      => 'GameId',
        'tagStatus'   => 'TagStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->archiveId) {
            $res['ArchiveId'] = $this->archiveId;
        }
        if (null !== $this->archiveTime) {
            $res['ArchiveTime'] = $this->archiveTime;
        }
        if (null !== $this->gameId) {
            $res['GameId'] = $this->gameId;
        }
        if (null !== $this->tagStatus) {
            $res['TagStatus'] = $this->tagStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['ArchiveId'])) {
            $model->archiveId = $map['ArchiveId'];
        }
        if (isset($map['ArchiveTime'])) {
            $model->archiveTime = $map['ArchiveTime'];
        }
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }
        if (isset($map['TagStatus'])) {
            $model->tagStatus = $map['TagStatus'];
        }

        return $model;
    }
}

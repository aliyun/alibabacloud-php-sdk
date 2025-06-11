<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserProvisioningStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class userProvisioningStatistics extends Model
{
    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var int
     */
    public $failedEventCount;

    /**
     * @var string
     */
    public $latestAsyncTime;

    /**
     * @var string
     */
    public $ownerPk;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'directoryId' => 'DirectoryId',
        'entityId' => 'EntityId',
        'failedEventCount' => 'FailedEventCount',
        'latestAsyncTime' => 'LatestAsyncTime',
        'ownerPk' => 'OwnerPk',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->failedEventCount) {
            $res['FailedEventCount'] = $this->failedEventCount;
        }

        if (null !== $this->latestAsyncTime) {
            $res['LatestAsyncTime'] = $this->latestAsyncTime;
        }

        if (null !== $this->ownerPk) {
            $res['OwnerPk'] = $this->ownerPk;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['FailedEventCount'])) {
            $model->failedEventCount = $map['FailedEventCount'];
        }

        if (isset($map['LatestAsyncTime'])) {
            $model->latestAsyncTime = $map['LatestAsyncTime'];
        }

        if (isset($map['OwnerPk'])) {
            $model->ownerPk = $map['OwnerPk'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

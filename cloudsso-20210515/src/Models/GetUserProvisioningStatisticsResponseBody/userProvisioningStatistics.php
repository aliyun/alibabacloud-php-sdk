<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserProvisioningStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class userProvisioningStatistics extends Model
{
    /**
     * @description The ID of the resource directory.
     *
     * @example d-003qew84****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The entity ID, which is the ID of the RAM user provisioning.
     *
     * @example up-002axzhapcbz6e63****
     *
     * @var string
     */
    public $entityId;

    /**
     * @description The number of failed RAM user provisioning events that are associated with the RAM user provisioning.
     *
     * @example 3
     *
     * @var int
     */
    public $failedEventCount;

    /**
     * @description The time when the RAM user provisioning was last performed.
     *
     * @example 2022-11-28T03:55:42Z
     *
     * @var string
     */
    public $latestAsyncTime;

    /**
     * @description The ID of the Alibaba Cloud account to which the resource directory belongs.
     *
     * @example 139665787317****
     *
     * @var string
     */
    public $ownerPk;

    /**
     * @description The entity type. The value is fixed as `User Provisioning`.
     *
     * @example User Provisioning
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'directoryId'      => 'DirectoryId',
        'entityId'         => 'EntityId',
        'failedEventCount' => 'FailedEventCount',
        'latestAsyncTime'  => 'LatestAsyncTime',
        'ownerPk'          => 'OwnerPk',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return userProvisioningStatistics
     */
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

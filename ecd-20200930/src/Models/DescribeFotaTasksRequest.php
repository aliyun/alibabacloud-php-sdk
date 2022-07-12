<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeFotaTasksRequest extends Model
{
    /**
     * @var string
     */
    public $fotaStatus;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $taskUid;

    /**
     * @var string
     */
    public $userStatus;
    protected $_name = [
        'fotaStatus' => 'FotaStatus',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'regionId'   => 'RegionId',
        'taskUid'    => 'TaskUid',
        'userStatus' => 'UserStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fotaStatus) {
            $res['FotaStatus'] = $this->fotaStatus;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->taskUid) {
            $res['TaskUid'] = $this->taskUid;
        }
        if (null !== $this->userStatus) {
            $res['UserStatus'] = $this->userStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFotaTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FotaStatus'])) {
            $model->fotaStatus = $map['FotaStatus'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TaskUid'])) {
            if (!empty($map['TaskUid'])) {
                $model->taskUid = $map['TaskUid'];
            }
        }
        if (isset($map['UserStatus'])) {
            $model->userStatus = $map['UserStatus'];
        }

        return $model;
    }
}

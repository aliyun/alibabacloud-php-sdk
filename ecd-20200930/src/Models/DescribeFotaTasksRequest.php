<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeFotaTasksRequest extends Model
{
    /**
     * @description This parameter is not available to the public.
     *
     * @example To be hidden.
     *
     * @var string
     */
    public $fotaStatus;

    /**
     * @description The number of entries to return on each page.
     *
     *   Maximum value: 100
     *   Default value: 20
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start point of the next query. If this parameter is left empty, all results are returned.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the image update task. You can call the DescribeFotaTasks operation to obtain the value of this parameter.
     *
     * @var string[]
     */
    public $taskUid;

    /**
     * @description Specifies whether to automatically push the image update task.
     *
     * @example Pending
     *
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeFotaTasksRequest extends Model
{
    /**
     * @description This parameter is not available.
     *
     * @example To be hidden.
     *
     * @var string
     */
    public $fotaStatus;

    /**
     * @description The language of the image version to update. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries per page.
     *
     *   Valid values: 1 to 100
     *   Default value: 20
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. If the NextToken parameter is empty, no next page exists.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IDs of the image update tasks. You can call the DescribeFotaTasks operation to obtain the value of this parameter.
     *
     * @var string[]
     */
    public $taskUid;

    /**
     * @description Specifies whether to automatically push the image update task.
     *
     * Valid values:
     *
     *   Running
     *
     * <!-- -->
     *
     *   Pending
     *
     * <!-- -->
     * @example Pending
     *
     * @var string
     */
    public $userStatus;
    protected $_name = [
        'fotaStatus' => 'FotaStatus',
        'lang'       => 'Lang',
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
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
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

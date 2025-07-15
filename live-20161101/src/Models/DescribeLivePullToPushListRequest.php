<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLivePullToPushListRequest extends Model
{
    /**
     * @description The destination URL. Fuzzy search is performed based on the destination URL.
     *
     * @example rtmp://qd
     *
     * @var string
     */
    public $dstUrl;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number.
     *
     * >  The value must be greater than 0 and not greater than the maximum value of the Integer data type. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * >  Valid values: [1,100]. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region of the live center. Valid values:
     *
     *   ap-southeast-1: Singapore
     *   ap-southeast-5: Indonesia (Jakarta)
     *   cn-beijing: China (Beijing)
     *   cn-shanghai: China (Shanghai)
     *
     * This parameter is required.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The task ID. Fuzzy search is performed based on the task ID.
     *
     * >  The ID can be up to 55 characters in length and can contain letters, digits, underscores (_), and hyphens (-).
     *
     * @example 861009
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The task name. Fuzzy search is performed based on the task name.
     *
     * @example task
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'dstUrl' => 'DstUrl',
        'ownerId' => 'OwnerId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'region' => 'Region',
        'regionId' => 'RegionId',
        'taskId' => 'TaskId',
        'taskName' => 'TaskName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstUrl) {
            $res['DstUrl'] = $this->dstUrl;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLivePullToPushListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstUrl'])) {
            $model->dstUrl = $map['DstUrl'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeCasterProgramRequest extends Model
{
    /**
     * @description The ID of the production studio.
     *
     *   If the production studio was created by calling the [CreateCaster](https://help.aliyun.com/document_detail/2848009.html) operation, check the value of the response parameter CasterId to obtain the ID.
     *   If the production studio was created by using the ApsaraVideo Live console, obtain the ID on the **Production Studio Management** page. To go to the page, log on to the **ApsaraVideo Live console** and click **Production Studios** in the left-side navigation pane.
     *
     * >  You can find the ID of the production studio in the Instance ID/Name column.
     *
     * This parameter is required.
     *
     * @example LIVEPRODUCER_POST-cn-0pp1czt****
     *
     * @var string
     */
    public $casterId;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 2016-06-29T10:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the episode.
     *
     * @example 1872639A-F203-4EC5-8E43-CB92E68F****
     *
     * @var string
     */
    public $episodeId;

    /**
     * @description The type of the episode. Valid values:
     *
     *   **Resource**: a video resource
     *   **Component**: a component
     *
     * @example Resource
     *
     * @var string
     */
    public $episodeType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number.
     *
     * @example 5
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 2016-06-29T09:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the episode. Valid values:
     *
     *   **0**: The episode is not played.
     *   **1**: The episode is being played.
     *   **2**: The playback of the episode is complete.
     *
     * @example 0
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'casterId' => 'CasterId',
        'endTime' => 'EndTime',
        'episodeId' => 'EpisodeId',
        'episodeType' => 'EpisodeType',
        'ownerId' => 'OwnerId',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'startTime' => 'StartTime',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->episodeId) {
            $res['EpisodeId'] = $this->episodeId;
        }
        if (null !== $this->episodeType) {
            $res['EpisodeType'] = $this->episodeType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCasterProgramRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EpisodeId'])) {
            $model->episodeId = $map['EpisodeId'];
        }
        if (isset($map['EpisodeType'])) {
            $model->episodeType = $map['EpisodeType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

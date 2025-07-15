<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterProgramResponseBody\episodes;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterProgramResponseBody\episodes\episode\componentIds;
use AlibabaCloud\Tea\Model;

class episode extends Model
{
    /**
     * @description The components.
     *
     * @var componentIds
     */
    public $componentIds;

    /**
     * @description The end of the time range during which data was queried. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2016-06-29T10:02:00Z
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
     * @description The name of the episode.
     *
     * @example program_name_1
     *
     * @var string
     */
    public $episodeName;

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
     * @description The ID of the video resource.
     *
     * @example 1872639A-F203-4EC5-8E43-CB92E837****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The beginning of the time range during which data was queried. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2016-06-29T09:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the episode.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The policy for switching episodes. Valid values:
     *
     *   **TimeFirst**: The episode starts when the previous episode ends and ends when the next episode starts. If no next episode exists, the episode keeps repeating until a new episode is added or the production studio stops. This value is required for live video resources.
     *   **ContentFirst**: The episode starts and ends as scheduled.
     *
     * @example TimeFirst
     *
     * @var string
     */
    public $switchType;
    protected $_name = [
        'componentIds' => 'ComponentIds',
        'endTime' => 'EndTime',
        'episodeId' => 'EpisodeId',
        'episodeName' => 'EpisodeName',
        'episodeType' => 'EpisodeType',
        'resourceId' => 'ResourceId',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'switchType' => 'SwitchType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentIds) {
            $res['ComponentIds'] = null !== $this->componentIds ? $this->componentIds->toMap() : null;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->episodeId) {
            $res['EpisodeId'] = $this->episodeId;
        }
        if (null !== $this->episodeName) {
            $res['EpisodeName'] = $this->episodeName;
        }
        if (null !== $this->episodeType) {
            $res['EpisodeType'] = $this->episodeType;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->switchType) {
            $res['SwitchType'] = $this->switchType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return episode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentIds'])) {
            $model->componentIds = componentIds::fromMap($map['ComponentIds']);
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EpisodeId'])) {
            $model->episodeId = $map['EpisodeId'];
        }
        if (isset($map['EpisodeName'])) {
            $model->episodeName = $map['EpisodeName'];
        }
        if (isset($map['EpisodeType'])) {
            $model->episodeType = $map['EpisodeType'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SwitchType'])) {
            $model->switchType = $map['SwitchType'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ModifyCasterProgramRequest;

use AlibabaCloud\Tea\Model;

class episode extends Model
{
    /**
     * @description The components. Components in the production studio are listed from the bottom to the top in an array. When the production studio switches to another video resource, the components are also switched.
     *
     *   This parameter is required and available only when EpisodeType is set to **Component**.
     *   This parameter is optional when EpisodeType is set to **Resource**. This indicates that the components are bound to and switched together with video resources.
     *
     * @example ["a2b8e671-2fe5-4642-a2ec-bf93888****" ]
     *
     * @var string[]
     */
    public $componentId;

    /**
     * @description The end time of the episode. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 2016-06-29T10:04:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the episode. If the episode was added by calling the [AddCasterEpisode](https://help.aliyun.com/document_detail/2848068.html) operation, check the value of the response parameter EpisodeId to obtain the ID.
     *
     * @example a2b8e671-2fe5-4642-a2ec-bf938887****
     *
     * @var string
     */
    public $episodeId;

    /**
     * @description The name of the episode.
     *
     * @example program_name_2
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
     * @description The ID of the video resource. If the video resource was added by calling the [AddCasterVideoResource](https://help.aliyun.com/document_detail/2848020.html) operation, check the value of the response parameter ResourceId to obtain the ID.
     *
     * @example a2b8e671-2fe5-4642-a2ec-bf938887****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The start time of the episode. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * @example 2016-06-29T09:02:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The policy for switching episodes. This parameter takes effect only when EpisodeType is set to **Resource**. Valid values:
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
        'componentId' => 'ComponentId',
        'endTime' => 'EndTime',
        'episodeId' => 'EpisodeId',
        'episodeName' => 'EpisodeName',
        'episodeType' => 'EpisodeType',
        'resourceId' => 'ResourceId',
        'startTime' => 'StartTime',
        'switchType' => 'SwitchType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentId) {
            $res['ComponentId'] = $this->componentId;
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
        if (isset($map['ComponentId'])) {
            if (!empty($map['ComponentId'])) {
                $model->componentId = $map['ComponentId'];
            }
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
        if (isset($map['SwitchType'])) {
            $model->switchType = $map['SwitchType'];
        }

        return $model;
    }
}

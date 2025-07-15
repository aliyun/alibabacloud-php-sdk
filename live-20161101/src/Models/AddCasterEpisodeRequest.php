<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddCasterEpisodeRequest extends Model
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
     * @description The components. Components in the production studio are listed from the bottom to the top in an array.
     *
     * If a component was added by calling the [AddCasterComponent](https://help.aliyun.com/document_detail/2848030.html) operation, check the value of the response parameter ComponentId to obtain the component ID.
     *
     *   This parameter takes effect and is required when the EpisodeType parameter is set to **Component**.
     *   This parameter is optional when the EpisodeType parameter is set to **Resource**. In this case, if this parameter is specified, the components are bound to and switched together with video resources.
     *
     * >  The variable N specifies the sequence number of the component. For example, **ComponentId.1** specifies the ID of the first component and **ComponentId.2** specifies the ID of the second component.
     *
     * @example ["a2b8e671-2fe5-4642-a2ec-bf93880e****"]
     *
     * @var string[]
     */
    public $componentId;

    /**
     * @description The time when the episode ends. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * This parameter is required.
     *
     * @example 2016-06-29T09:10:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The name of the episode.
     *
     * @example episode_1
     *
     * @var string
     */
    public $episodeName;

    /**
     * @description The type of the episode. Valid values:
     *
     *   **Resource**: a video resource.
     *   **Component**: a component.
     *
     * This parameter is required.
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
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the video resource.
     *
     * >  This parameter takes effect and is required when the EpisodeType parameter is set to Resource.
     *
     * \\
     * If the video resource was added by calling the [AddCasterVideoResource](https://help.aliyun.com/document_detail/2848020.html) operation, check the value of the response parameter ResourceId to obtain the ID.
     *
     * @example a2b8e671-2fe5-4642-a2ec-bf93880e****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The time when the episode starts. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time must be in UTC.
     *
     * This parameter is required.
     *
     * @example 2016-06-29T08:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The policy for switching episodes. Valid values:
     *
     *   **TimeFirst**: The episode starts when the preceding episode ends and ends when the next episode starts. If no next episode exists, the episode keeps repeating until a new episode is added or the production studio stops.
     *   **ContentFirst**: The episode starts and ends as scheduled.
     *
     * This parameter takes effect only when the EpisodeType parameter is set to Resource.
     *
     * >  This parameter must be set to TimeFirst when the video resource is a live stream.
     *
     * This parameter is required.
     *
     * @example TimeFirst
     *
     * @var string
     */
    public $switchType;
    protected $_name = [
        'casterId' => 'CasterId',
        'componentId' => 'ComponentId',
        'endTime' => 'EndTime',
        'episodeName' => 'EpisodeName',
        'episodeType' => 'EpisodeType',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceId' => 'ResourceId',
        'startTime' => 'StartTime',
        'switchType' => 'SwitchType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->componentId) {
            $res['ComponentId'] = $this->componentId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->episodeName) {
            $res['EpisodeName'] = $this->episodeName;
        }
        if (null !== $this->episodeType) {
            $res['EpisodeType'] = $this->episodeType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
     * @return AddCasterEpisodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['ComponentId'])) {
            if (!empty($map['ComponentId'])) {
                $model->componentId = $map['ComponentId'];
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EpisodeName'])) {
            $model->episodeName = $map['EpisodeName'];
        }
        if (isset($map['EpisodeType'])) {
            $model->episodeType = $map['EpisodeType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

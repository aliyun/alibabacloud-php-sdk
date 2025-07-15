<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ModifyShowListRequest extends Model
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
     * @description The episode of the highest priority.
     *
     * >  You can configure this parameter only before the playback of the episode list starts.
     *
     * @example a2b8e671-2fe5-4642-a2ec-bf93880e****
     *
     * @var string
     */
    public $highPriorityShowId;

    /**
     * @description The time at which the episode of the highest priority is played. Format: yyyy-MM-dd\\"T\\"HH:mm:ss.
     *
     * >  You can configure this parameter only before the episode list starts playing.\\
     * After you configure this parameter, when the specified point in time is reached, any episode that is playing stops and the episode of the highest priority in the episode list starts to play.
     *
     * @example 2021-11-23T12:30:00
     *
     * @var string
     */
    public $highPriorityShowStartTime;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The number of additional times the episode list is played.
     *
     * >
     *
     *   The RepeatTimes parameter specifies the number of repetitions. For example, if you set the value to **0**, the episode list is played **once**. If you set the value to **1**, the episode list is played **twice**.********
     *
     *   If you set the value to -1, the episode list is repeated indefinitely.
     *
     * @example 5
     *
     * @var int
     */
    public $repeatTimes;

    /**
     * @description The ID of the episode for which you want to change the position in the playlist.
     *
     * >  You can call the [AddShowIntoShowList](https://help.aliyun.com/document_detail/2848051.html) or [DescribeShowList](https://help.aliyun.com/document_detail/2848054.html) operation and check the value of the response parameter ShowId to obtain the ID.
     *
     * @example a2b8e671-2fe5-4642-a2ec-bf93880e****
     *
     * @var string
     */
    public $showId;

    /**
     * @description The position of the episode in the episode list. If you want to change the position of an episode in a playlist, place the ID of the episode in **Spot**.
     *
     * >  The value must be greater than or equal to 0 and less than or equal to the total number of episodes in the playlist.
     *
     * @example 1
     *
     * @var int
     */
    public $spot;
    protected $_name = [
        'casterId' => 'CasterId',
        'highPriorityShowId' => 'HighPriorityShowId',
        'highPriorityShowStartTime' => 'HighPriorityShowStartTime',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'repeatTimes' => 'RepeatTimes',
        'showId' => 'ShowId',
        'spot' => 'Spot',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->highPriorityShowId) {
            $res['HighPriorityShowId'] = $this->highPriorityShowId;
        }
        if (null !== $this->highPriorityShowStartTime) {
            $res['HighPriorityShowStartTime'] = $this->highPriorityShowStartTime;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->repeatTimes) {
            $res['RepeatTimes'] = $this->repeatTimes;
        }
        if (null !== $this->showId) {
            $res['ShowId'] = $this->showId;
        }
        if (null !== $this->spot) {
            $res['Spot'] = $this->spot;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyShowListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['HighPriorityShowId'])) {
            $model->highPriorityShowId = $map['HighPriorityShowId'];
        }
        if (isset($map['HighPriorityShowStartTime'])) {
            $model->highPriorityShowStartTime = $map['HighPriorityShowStartTime'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RepeatTimes'])) {
            $model->repeatTimes = $map['RepeatTimes'];
        }
        if (isset($map['ShowId'])) {
            $model->showId = $map['ShowId'];
        }
        if (isset($map['Spot'])) {
            $model->spot = $map['Spot'];
        }

        return $model;
    }
}

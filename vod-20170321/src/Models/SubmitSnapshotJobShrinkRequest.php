<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitSnapshotJobShrinkRequest extends Model
{
    /**
     * @description The maximum number of snapshots. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The height of each snapshot. Valid values: `[8,4096]`. By default, the height of the video mezzanine file is used. Unit: pixel.
     *
     * @example 720
     *
     * @var string
     */
    public $height;

    /**
     * @description The snapshot interval. The value must be **greater than or equal to 0**. Unit: seconds. If you set this parameter to **0**, snapshots are taken at even intervals based on the video duration divided by the value of the Count parameter. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $interval;

    /**
     * @description The ID of the snapshot template.
     *
     *   We recommend that you create a snapshot template before you specify the ID of the snapshot template.
     *   If you set the SnapshotTemplateId parameter, all the other request parameters except the Action and VideoId parameters are ignored.
     *   For more information about how to create a snapshot template, see [AddVodTemplate](~~99406~~).
     *
     * @example f5b228fe693bf55bd87b789****
     *
     * @var string
     */
    public $snapshotTemplateId;

    /**
     * @description The start time of the specified snapshot time period.
     *
     *   Unit: milliseconds.
     *   Default value: **0**.
     *
     * @example 0
     *
     * @var int
     */
    public $specifiedOffsetTime;

    /**
     * @var string
     */
    public $specifiedOffsetTimesShrink;

    /**
     * @description The sprite snapshot configuration. If you set this parameter, sprite snapshots are generated. For more information, see [SpriteSnapshotConfig](~~86952~~).
     *
     * @example {\"CellWidth\": 120, \"CellHeight\": 68, \"Columns\": 3,\"Lines\": 10, \"Padding\": 20, \"Margin\": 50}
     *
     * @var string
     */
    public $spriteSnapshotConfig;

    /**
     * @description The custom configurations, including the configuration of transparent data transmission and callback configurations. The value is a JSON-formatted string. For more information, see [UserData](~~86952~~).
     *
     **
     *
     **Note** The callback configurations take effect only when you specify the HTTP callback URL and select the specific callback events in the ApsaraVideo VOD console.
     *
     * @example {"MessageCallback":{"CallbackURL":"http://.example.aliyundoc.com"},"Extend":{"localId":"xxx","example":"www"}}
     *
     * @var string
     */
    public $userData;

    /**
     * @description The ID of the video.
     *
     * @example d3e680e618708efbf2cae7cc9312****
     *
     * @var string
     */
    public $videoId;

    /**
     * @description The width of each snapshot. Valid values: `[8,4096]`. By default, the width of the video mezzanine file is used. Unit: pixel.
     *
     * @example 1280
     *
     * @var string
     */
    public $width;
    protected $_name = [
        'count'                      => 'Count',
        'height'                     => 'Height',
        'interval'                   => 'Interval',
        'snapshotTemplateId'         => 'SnapshotTemplateId',
        'specifiedOffsetTime'        => 'SpecifiedOffsetTime',
        'specifiedOffsetTimesShrink' => 'SpecifiedOffsetTimes',
        'spriteSnapshotConfig'       => 'SpriteSnapshotConfig',
        'userData'                   => 'UserData',
        'videoId'                    => 'VideoId',
        'width'                      => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->snapshotTemplateId) {
            $res['SnapshotTemplateId'] = $this->snapshotTemplateId;
        }
        if (null !== $this->specifiedOffsetTime) {
            $res['SpecifiedOffsetTime'] = $this->specifiedOffsetTime;
        }
        if (null !== $this->specifiedOffsetTimesShrink) {
            $res['SpecifiedOffsetTimes'] = $this->specifiedOffsetTimesShrink;
        }
        if (null !== $this->spriteSnapshotConfig) {
            $res['SpriteSnapshotConfig'] = $this->spriteSnapshotConfig;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSnapshotJobShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['SnapshotTemplateId'])) {
            $model->snapshotTemplateId = $map['SnapshotTemplateId'];
        }
        if (isset($map['SpecifiedOffsetTime'])) {
            $model->specifiedOffsetTime = $map['SpecifiedOffsetTime'];
        }
        if (isset($map['SpecifiedOffsetTimes'])) {
            $model->specifiedOffsetTimesShrink = $map['SpecifiedOffsetTimes'];
        }
        if (isset($map['SpriteSnapshotConfig'])) {
            $model->spriteSnapshotConfig = $map['SpriteSnapshotConfig'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}

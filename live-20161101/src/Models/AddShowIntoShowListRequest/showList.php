<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\AddShowIntoShowListRequest;

use AlibabaCloud\Tea\Model;

class showList extends Model
{
    /**
     * @description The duration of the episode. Unit: seconds.
     *
     * >  You can specify only one of the **RepeatTimes** and **Duration** parameters.
     *
     * @example 20
     *
     * @var int
     */
    public $duration;

    /**
     * @description The custom type label.
     *
     * @example 1
     *
     * @var int
     */
    public $liveInputType;

    /**
     * @description The number of times the episode repeats after the first playback is complete. Default value: 0.
     *
     * >
     *
     *   You can specify only one of the **RepeatTimes** and **Duration** parameters.
     *
     *   The RepeatTimes parameter specifies the number of repetitions. For example, if you set the value to 0, the episode is to be played once. If you set the value to 1, the episode is to be played twice.
     *
     * @example 0
     *
     * @var int
     */
    public $repeatTimes;

    /**
     * @description The ID of the resource.
     *
     * @example a2b8e671-2fe5-4642-a2ec-bf93880e****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The resource type. Valid values:
     *
     *   live: live stream
     *   vod: on-demand video
     *   pic: image
     *
     * >
     *
     *   When you select media resources from ApsaraVideo VOD, we recommend that you select resources that are stored in hosted OSS buckets. Resources stored in non-hosted OSS buckets have a validity period. Pay attention to the validity if you select resources that are stored in non-hosted OSS buckets.
     *
     *   You can add a live stream from ApsaraVideo Live or by using a third-party URL.
     *   You can add an on-demand video from ApsaraVideo VOD or by using a third-party URL, or add an on-demand image.
     *
     * @example vod
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The URL of the resource.
     *
     * @var string
     */
    public $resourceUrl;

    /**
     * @description The name of the episode.
     *
     * @example liveShow****
     *
     * @var string
     */
    public $showName;
    protected $_name = [
        'duration' => 'duration',
        'liveInputType' => 'liveInputType',
        'repeatTimes' => 'repeatTimes',
        'resourceId' => 'resourceId',
        'resourceType' => 'resourceType',
        'resourceUrl' => 'resourceUrl',
        'showName' => 'showName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->liveInputType) {
            $res['liveInputType'] = $this->liveInputType;
        }
        if (null !== $this->repeatTimes) {
            $res['repeatTimes'] = $this->repeatTimes;
        }
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->resourceUrl) {
            $res['resourceUrl'] = $this->resourceUrl;
        }
        if (null !== $this->showName) {
            $res['showName'] = $this->showName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return showList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }
        if (isset($map['liveInputType'])) {
            $model->liveInputType = $map['liveInputType'];
        }
        if (isset($map['repeatTimes'])) {
            $model->repeatTimes = $map['repeatTimes'];
        }
        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['resourceUrl'])) {
            $model->resourceUrl = $map['resourceUrl'];
        }
        if (isset($map['showName'])) {
            $model->showName = $map['showName'];
        }

        return $model;
    }
}

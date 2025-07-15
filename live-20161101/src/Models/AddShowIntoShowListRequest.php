<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\AddShowIntoShowListRequest\showList;
use AlibabaCloud\Tea\Model;

class AddShowIntoShowListRequest extends Model
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
     * @description The duration of the episode. Unit: seconds.
     *
     * > You can specify only one of the **RepeatTimes** and **Duration** parameters.
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
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The number of times the episode repeats after the first playback is complete. The default value is 0.
     *
     * >
     *
     *   You can specify only one of the **RepeatTimes** and **Duration** parameters. - The RepeatTimes parameter specifies the number of repetitions. For example, if you set the value to -1, the episode is to be played for infinite times. If you set the value to 0, the episode is to be played once. If you set the value to 1, the episode is to be played twice.
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
     *   When you select media resources from ApsaraVideo VOD, we recommend that you select resources that are stored in hosted OSS buckets. Resources stored in non-hosted OSS buckets have a validity period. Pay attention to the validity if you select resources that are stored in non-hosted OSS buckets. - You can add a live stream from ApsaraVideo Live or by using a third-party URL. - You can add an on-demand video from ApsaraVideo VOD or by using a third-party URL, or add an on-demand image.
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

    /**
     * @description The position of the episode in the episode list. Position indexes start from 0. By default, the episode is added to the end of the episode list.
     *
     * @example 1
     *
     * @var int
     */
    public $spot;

    /**
     * @description Specifies whether to add multiple episodes to the episode list at a time. Valid values:
     *
     *   true: adds multiple episodes to the episode list at a time.
     *   false: adds a single episode to the episode list.
     *
     * > If you do not specify this parameter or this parameter is left empty, a single episode is to be added to the episode list.
     *
     * @example false
     *
     * @var bool
     */
    public $isBatchMode;

    /**
     * @description The episodes that you want to add to the episode list. Each episode has a unique name and resource URL.
     *
     * @var showList[]
     */
    public $showList;
    protected $_name = [
        'casterId' => 'CasterId',
        'duration' => 'Duration',
        'liveInputType' => 'LiveInputType',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'repeatTimes' => 'RepeatTimes',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
        'resourceUrl' => 'ResourceUrl',
        'showName' => 'ShowName',
        'spot' => 'Spot',
        'isBatchMode' => 'isBatchMode',
        'showList' => 'showList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->liveInputType) {
            $res['LiveInputType'] = $this->liveInputType;
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
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->resourceUrl) {
            $res['ResourceUrl'] = $this->resourceUrl;
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }
        if (null !== $this->spot) {
            $res['Spot'] = $this->spot;
        }
        if (null !== $this->isBatchMode) {
            $res['isBatchMode'] = $this->isBatchMode;
        }
        if (null !== $this->showList) {
            $res['showList'] = [];
            if (null !== $this->showList && \is_array($this->showList)) {
                $n = 0;
                foreach ($this->showList as $item) {
                    $res['showList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddShowIntoShowListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['LiveInputType'])) {
            $model->liveInputType = $map['LiveInputType'];
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
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ResourceUrl'])) {
            $model->resourceUrl = $map['ResourceUrl'];
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }
        if (isset($map['Spot'])) {
            $model->spot = $map['Spot'];
        }
        if (isset($map['isBatchMode'])) {
            $model->isBatchMode = $map['isBatchMode'];
        }
        if (isset($map['showList'])) {
            if (!empty($map['showList'])) {
                $model->showList = [];
                $n = 0;
                foreach ($map['showList'] as $item) {
                    $model->showList[$n++] = null !== $item ? showList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

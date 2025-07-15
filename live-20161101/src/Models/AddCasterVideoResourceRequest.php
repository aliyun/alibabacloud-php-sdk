<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddCasterVideoResourceRequest extends Model
{
    /**
     * @description The offset of the position where the system starts to read the video source. Unit: milliseconds.
     * > A value greater than **0** specifies an offset from the first frame.
     * @example 1000
     *
     * @var int
     */
    public $beginOffset;

    /**
     * @description The ID of the production studio.
     *
     *   If the production studio was created by calling the [CreateCaster](https://help.aliyun.com/document_detail/69338.html) operation, check the value of the response parameter CasterId to obtain the ID.
     *   If the production studio was created by using the ApsaraVideo Live console, obtain the ID on the **Production Studio Management** page. To go to the page, log on to the **ApsaraVideo Live console** and click **Production Studios** in the left-side navigation pane.
     *
     * > You can find the ID of the production studio in the Instance Name column.
     *
     * This parameter is required.
     *
     * @example LIVEPRODUCER_POST-cn-0pp1czt****
     *
     * @var string
     */
    public $casterId;

    /**
     * @description The offset of the position where the system stops reading the video source. Unit: milliseconds.
     *   A value less than **0** specifies an offset from the last frame.
     * @example 10000
     *
     * @var int
     */
    public $endOffset;

    /**
     * @description The fixed delay of the video layer. This parameter is used to synchronize the video with subtitles. Unit: milliseconds. Default value: 0. Valid values: `0 to 5000`.
     *
     * @example 0
     *
     * @var int
     */
    public $fixedDelayDuration;

    /**
     * @description ID of the media library image material.
     * >This parameter is only available and must be provided when the video source type is an image.
     *
     * @example a089175eb5f4427684fc0715159a****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description Image material URL.
     * >This parameter is available only when the video source type is an image and the image file has not been imported into the material library. Supports uploading images in jpg, png formats, with a maximum file size of 10MB.
     *
     * @example http://learn.aliyundoc.com/AppName/image.jpg
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description The streaming URL.
     * > Do not specify this parameter in the request if the video source is not a live stream.
     * @example rtmp://guide.aliyundoc.com/caster/4a82a3d1b7f0462ea37348366201****?auth_key=1608953344-0-0-ac8c628078541d7055a170ec59a5****
     *
     * @var string
     */
    public $liveStreamUrl;

    /**
     * @description The ID that is used to identify the position of the video source.
     *
     * Define the reference numbers in the layout. Each reference number is associated with only one resource. The value of this parameter must be in the RV[Number] format, where Number is `01 to 99`.
     *
     * @example RV01
     *
     * @var string
     */
    public $locationId;

    /**
     * @description The ID of the material from the media library.
     * > The value of the UrgentMaterialId parameter is the ID of the material from the media library.
     * @example f080575eb5f4427684fc0715159a****
     *
     * @var string
     */
    public $materialId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The interval between presentation timestamp (PTS) callbacks. Unit: milliseconds.
     *
     * @example 2000
     *
     * @var int
     */
    public $ptsCallbackInterval;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The number of playbacks after the first playback is complete. Valid values:
     *   **-1**: specifies that the video source is played in loop mode.
     * @example 0
     *
     * @var int
     */
    public $repeatNum;

    /**
     * @description The name of the video source.
     *
     * This parameter is required.
     *
     * @example test001
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description The URL of the VOD file.
     * > The VOD file must be in the MP4, FLV, or TS format.
     * @example http://learn.aliyundoc.com/AppName/StreamName.flv
     *
     * @var string
     */
    public $vodUrl;
    protected $_name = [
        'beginOffset' => 'BeginOffset',
        'casterId' => 'CasterId',
        'endOffset' => 'EndOffset',
        'fixedDelayDuration' => 'FixedDelayDuration',
        'imageId' => 'ImageId',
        'imageUrl' => 'ImageUrl',
        'liveStreamUrl' => 'LiveStreamUrl',
        'locationId' => 'LocationId',
        'materialId' => 'MaterialId',
        'ownerId' => 'OwnerId',
        'ptsCallbackInterval' => 'PtsCallbackInterval',
        'regionId' => 'RegionId',
        'repeatNum' => 'RepeatNum',
        'resourceName' => 'ResourceName',
        'vodUrl' => 'VodUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginOffset) {
            $res['BeginOffset'] = $this->beginOffset;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->endOffset) {
            $res['EndOffset'] = $this->endOffset;
        }
        if (null !== $this->fixedDelayDuration) {
            $res['FixedDelayDuration'] = $this->fixedDelayDuration;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->liveStreamUrl) {
            $res['LiveStreamUrl'] = $this->liveStreamUrl;
        }
        if (null !== $this->locationId) {
            $res['LocationId'] = $this->locationId;
        }
        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->ptsCallbackInterval) {
            $res['PtsCallbackInterval'] = $this->ptsCallbackInterval;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->repeatNum) {
            $res['RepeatNum'] = $this->repeatNum;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->vodUrl) {
            $res['VodUrl'] = $this->vodUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCasterVideoResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginOffset'])) {
            $model->beginOffset = $map['BeginOffset'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['EndOffset'])) {
            $model->endOffset = $map['EndOffset'];
        }
        if (isset($map['FixedDelayDuration'])) {
            $model->fixedDelayDuration = $map['FixedDelayDuration'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['LiveStreamUrl'])) {
            $model->liveStreamUrl = $map['LiveStreamUrl'];
        }
        if (isset($map['LocationId'])) {
            $model->locationId = $map['LocationId'];
        }
        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PtsCallbackInterval'])) {
            $model->ptsCallbackInterval = $map['PtsCallbackInterval'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RepeatNum'])) {
            $model->repeatNum = $map['RepeatNum'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['VodUrl'])) {
            $model->vodUrl = $map['VodUrl'];
        }

        return $model;
    }
}

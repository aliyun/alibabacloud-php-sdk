<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ModifyCasterVideoResourceRequest extends Model
{
    /**
     * @description The offset of the position where the system starts to read the video resource.
     *
     * This parameter takes effect only when the video resource is a video file. Unit: milliseconds.
     *
     * >  A value greater than 0 indicates an offset from the first frame.
     *
     * @example 0
     *
     * @var int
     */
    public $beginOffset;

    /**
     * @description The ID of the production studio.
     *
     * If you create a production studio through the [CreateCaster](~~69338#doc-api-live-CreateCaster~~ "Creates a production studio.") interface, check the value of the CasterId parameter in the response.
     *
     * If you create a production studio through the ApsaraVideo Live Console, log in to the console, then check the ID of the production studio through the following path:
     *
     * Production Studios > Production Studio Management
     *
     * >  The CasterId is reflected in the Name column on the Production Studio Management page.
     *
     * This parameter is required.
     *
     * @example LIVEPRODUCER_POST-cn-0pp1czt****
     *
     * @var string
     */
    public $casterId;

    /**
     * @description This parameter takes effect only when the video resource is a video file. Unit: milliseconds.
     *
     *   A value greater than **0** indicates an offset from the first frame.
     *   A value smaller than **0** indicates an offset from the last frame.
     *
     * @example 10000
     *
     * @var int
     */
    public $endOffset;

    /**
     * @description ID of the media library image material.
     * > This parameter is only available and must be provided when the video source type is an image.
     *
     * @example a089175eb5f4427684fc0715159a****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description Image material URL.
     * >This parameter is only available when the video source type is an image and the image file has not been imported into the material library. Supports uploading images in jpg, png formats, with a maximum file size of 10MB.
     *
     * @example http://learn.aliyundoc.com/AppName/image.jpg
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description The URL of the live stream.
     *
     * This parameter takes effect and is required only when the video resource is a live stream.
     *
     * @example rtmp://guide.aliyundoc.com/caster/4a82a3d1b7f0462ea37348366201****?auth_key=1608953344-0-0-ac8c628078541d7055a170ec59a5****
     *
     * @var string
     */
    public $liveStreamUrl;

    /**
     * @description The ID of the material.
     *
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
     * @description The interval between presentation timestamp (PTS) callbacks. Unit: milliseconds. This parameter takes effect only when the video resource is a VOD file.
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
     * @description The number of playback times after the first playback is complete. This parameter takes effect only when the video resource is a file. Valid values:
     *
     *   **0**: indicates that the video is played only once. This is the default value.
     *   **-1**: indicates that the video is played in loop mode.
     *
     * @example 0
     *
     * @var int
     */
    public $repeatNum;

    /**
     * @description The ID of the video resource. It is reflected in the ResourceId parameter when you call the [AddCasterVideoResource](~~60250#doc-api-live-AddCasterVideoResource~~ "Adds a video resource to a production studio.") operation.
     *
     * This parameter is required.
     *
     * @example 05ab713c-676e-49c0-96ce-cc408da1****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The name of the video resource.
     *
     * @example test001
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description The URL of the video-on-demand (VOD) file. This parameter takes effect only when the video resource is a video file that is not from the media library.
     *
     * >  The VOD file must be in the MP4, FLV, or TS format.
     *
     * @example http://developer.aliyundoc.com/AppName/StreamName.flv
     *
     * @var string
     */
    public $vodUrl;
    protected $_name = [
        'beginOffset' => 'BeginOffset',
        'casterId' => 'CasterId',
        'endOffset' => 'EndOffset',
        'imageId' => 'ImageId',
        'imageUrl' => 'ImageUrl',
        'liveStreamUrl' => 'LiveStreamUrl',
        'materialId' => 'MaterialId',
        'ownerId' => 'OwnerId',
        'ptsCallbackInterval' => 'PtsCallbackInterval',
        'regionId' => 'RegionId',
        'repeatNum' => 'RepeatNum',
        'resourceId' => 'ResourceId',
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
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->liveStreamUrl) {
            $res['LiveStreamUrl'] = $this->liveStreamUrl;
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
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
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
     * @return ModifyCasterVideoResourceRequest
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
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['LiveStreamUrl'])) {
            $model->liveStreamUrl = $map['LiveStreamUrl'];
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
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
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

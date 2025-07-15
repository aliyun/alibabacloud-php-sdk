<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateLiveAIStudioShrinkRequest extends Model
{
    /**
     * @description The ID of the background material in ApsaraVideo VOD. You can obtain the ID from the ApsaraVideo VOD console.
     *
     * @example d0eb493192c771efba644531858c0102
     *
     * @var string
     */
    public $backgroundResourceId;

    /**
     * @description The URL of the background material. Specify either this parameter or the BackgroundResourceId parameter.
     *
     * @example https://xxx.com/1.mp4
     *
     * @var string
     */
    public $backgroundResourceUrl;

    /**
     * @description The type of the background material. Valid values:
     *
     *   VOD: a video in ApsaraVideo VOD
     *   PIC: an image
     *   LIVE: a live stream
     *
     * @example VOD
     *
     * @var string
     */
    public $backgroundType;

    /**
     * @description The custom description.
     *
     * @example template 1080
     *
     * @var string
     */
    public $description;

    /**
     * @description The preview height. Unit: pixels.
     *
     * The following preview specifications (width × height) are supported:
     *
     *   Landscape low definition 360p (640×360)
     *   Portrait low definition 360p (360×640)
     *   Landscape standard definition 480p (854×480)
     *   Portrait standard definition 480p (480×854)
     *   Landscape high definition 720p (1280×720)
     *   Portrait high definition 720p (720×1280)
     *   Landscape ultra-high definition 1080p (1920×1080)
     *   Portrait ultra-high definition 1080p (1080×1920)
     *
     * @example 1080
     *
     * @var int
     */
    public $height;

    /**
     * @description The layout information of the chroma-keyed material.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $mattingLayoutShrink;

    /**
     * @description The type of chroma key. Valid values:
     *
     *   green: green-screen chroma key
     *   blue: blue-screen chroma key
     *   complex: background replacement
     *
     * This parameter is required.
     *
     * @example complex
     *
     * @var string
     */
    public $mattingType;

    /**
     * @description The layout information of the multimedia material.
     *
     * @var string
     */
    public $mediaLayoutShrink;

    /**
     * @description The ID of the multimedia material in ApsaraVideo VOD. You can obtain the ID from the ApsaraVideo VOD console.
     *
     * @example d0eb493192c771efba644531858c0102
     *
     * @var string
     */
    public $mediaResourceId;

    /**
     * @description The URL of the multimedia material. Specify either this parameter or the MediaResourceId parameter.
     *
     * @example https://xxx.com/2.mp4
     *
     * @var string
     */
    public $mediaResourceUrl;

    /**
     * @description The type of the multimedia material. Valid values:
     *
     *   VOD: a video in ApsaraVideo VOD
     *   PIC: an image
     *   LIVE: a live stream
     *
     * @example VOD
     *
     * @var string
     */
    public $mediaType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the virtual studio template. The name must be unique.
     *
     * This parameter is required.
     *
     * @example stu02
     *
     * @var string
     */
    public $studioName;

    /**
     * @description The preview width. Unit: pixels.
     *
     * @example 1920
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'backgroundResourceId' => 'BackgroundResourceId',
        'backgroundResourceUrl' => 'BackgroundResourceUrl',
        'backgroundType' => 'BackgroundType',
        'description' => 'Description',
        'height' => 'Height',
        'mattingLayoutShrink' => 'MattingLayout',
        'mattingType' => 'MattingType',
        'mediaLayoutShrink' => 'MediaLayout',
        'mediaResourceId' => 'MediaResourceId',
        'mediaResourceUrl' => 'MediaResourceUrl',
        'mediaType' => 'MediaType',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'studioName' => 'StudioName',
        'width' => 'Width',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->backgroundResourceId) {
            $res['BackgroundResourceId'] = $this->backgroundResourceId;
        }
        if (null !== $this->backgroundResourceUrl) {
            $res['BackgroundResourceUrl'] = $this->backgroundResourceUrl;
        }
        if (null !== $this->backgroundType) {
            $res['BackgroundType'] = $this->backgroundType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->mattingLayoutShrink) {
            $res['MattingLayout'] = $this->mattingLayoutShrink;
        }
        if (null !== $this->mattingType) {
            $res['MattingType'] = $this->mattingType;
        }
        if (null !== $this->mediaLayoutShrink) {
            $res['MediaLayout'] = $this->mediaLayoutShrink;
        }
        if (null !== $this->mediaResourceId) {
            $res['MediaResourceId'] = $this->mediaResourceId;
        }
        if (null !== $this->mediaResourceUrl) {
            $res['MediaResourceUrl'] = $this->mediaResourceUrl;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->studioName) {
            $res['StudioName'] = $this->studioName;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLiveAIStudioShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackgroundResourceId'])) {
            $model->backgroundResourceId = $map['BackgroundResourceId'];
        }
        if (isset($map['BackgroundResourceUrl'])) {
            $model->backgroundResourceUrl = $map['BackgroundResourceUrl'];
        }
        if (isset($map['BackgroundType'])) {
            $model->backgroundType = $map['BackgroundType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['MattingLayout'])) {
            $model->mattingLayoutShrink = $map['MattingLayout'];
        }
        if (isset($map['MattingType'])) {
            $model->mattingType = $map['MattingType'];
        }
        if (isset($map['MediaLayout'])) {
            $model->mediaLayoutShrink = $map['MediaLayout'];
        }
        if (isset($map['MediaResourceId'])) {
            $model->mediaResourceId = $map['MediaResourceId'];
        }
        if (isset($map['MediaResourceUrl'])) {
            $model->mediaResourceUrl = $map['MediaResourceUrl'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StudioName'])) {
            $model->studioName = $map['StudioName'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}

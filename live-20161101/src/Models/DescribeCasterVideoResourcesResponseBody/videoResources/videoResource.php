<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterVideoResourcesResponseBody\videoResources;

use AlibabaCloud\Tea\Model;

class videoResource extends Model
{
    /**
     * @description The offset of the position where the system starts to read the video resource. This parameter takes effect only if the input source is a video file. Unit: milliseconds.
     *
     * A value **greater than 0** indicates an offset from the first frame.
     *
     * @example 1000
     *
     * @var int
     */
    public $beginOffset;

    /**
     * @description The offset of the position where the system stops reading the video file. This parameter takes effect only if the input source is a video file. Unit: milliseconds.
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
     * @description The source URL.
     *
     * @example http://guide.aliyundoc.com/example.org
     *
     * @var string
     */
    public $flvUrl;

    /**
     * @description The image ID.
     *
     * @example a089175eb5f4427684fc0715159a****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The image URL.
     *
     * @example http://learn.aliyundoc.com/AppName/image.jpg
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description The URL of the live stream.
     *
     * @example rtmp://abcLive/appName/b5447c21fcfe444c9e9b6f7ba208****
     *
     * @var string
     */
    public $liveStreamUrl;

    /**
     * @description The position of the video resource.
     *
     * @example RV01
     *
     * @var string
     */
    public $locationId;

    /**
     * @description The material ID.
     *
     * @example d2c429cd907742ee8f6e76465ad3****
     *
     * @var string
     */
    public $materialId;

    /**
     * @description The interval between presentation timestamp (PTS) callbacks. If you set the value to 0, the PTS callback is disabled. This parameter is returned only when the video resource is a video-on-demand (VOD) file.
     *
     * @example 0
     *
     * @var int
     */
    public $ptsCallbackInterval;

    /**
     * @description The number of playback times after the first playback is complete. This parameter takes effect only when the input source is a video file. Valid values:
     *
     *   **0** (default): The video file is played only once.
     *   **-1**: The video file is played in loop mode.
     *
     * @example 0
     *
     * @var int
     */
    public $repeatNum;

    /**
     * @description The resource ID.
     *
     * @example b5f8c837-ceeb-424f-b30b-68e94e86****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The resource name.
     *
     * @example resource-Name1
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description The URL of the VOD file.
     *
     * This parameter is returned only when the video resource is an MP4, FLV, or TS file that is not from the media library.
     *
     * @example http://developer.aliyundoc.com/caster1.flv
     *
     * @var string
     */
    public $vodUrl;
    protected $_name = [
        'beginOffset' => 'BeginOffset',
        'endOffset' => 'EndOffset',
        'flvUrl' => 'FlvUrl',
        'imageId' => 'ImageId',
        'imageUrl' => 'ImageUrl',
        'liveStreamUrl' => 'LiveStreamUrl',
        'locationId' => 'LocationId',
        'materialId' => 'MaterialId',
        'ptsCallbackInterval' => 'PtsCallbackInterval',
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
        if (null !== $this->endOffset) {
            $res['EndOffset'] = $this->endOffset;
        }
        if (null !== $this->flvUrl) {
            $res['FlvUrl'] = $this->flvUrl;
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
        if (null !== $this->ptsCallbackInterval) {
            $res['PtsCallbackInterval'] = $this->ptsCallbackInterval;
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
     * @return videoResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginOffset'])) {
            $model->beginOffset = $map['BeginOffset'];
        }
        if (isset($map['EndOffset'])) {
            $model->endOffset = $map['EndOffset'];
        }
        if (isset($map['FlvUrl'])) {
            $model->flvUrl = $map['FlvUrl'];
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
        if (isset($map['PtsCallbackInterval'])) {
            $model->ptsCallbackInterval = $map['PtsCallbackInterval'];
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

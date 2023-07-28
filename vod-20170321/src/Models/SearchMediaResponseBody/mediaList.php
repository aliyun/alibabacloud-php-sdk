<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList\aiData;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList\aiRoughData;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList\attachedMedia;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList\audio;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList\image;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList\video;
use AlibabaCloud\Tea\Model;

class mediaList extends Model
{
    /**
     * @description Details about AI data.
     *
     * @var aiData
     */
    public $aiData;

    /**
     * @description The basic information about AI data.
     *
     * @var aiRoughData
     */
    public $aiRoughData;

    /**
     * @description [Details about auxiliary media assets](~~86991~~).
     *
     * @var attachedMedia
     */
    public $attachedMedia;

    /**
     * @description [Details about audio files](~~86991~~).
     *
     * @var audio
     */
    public $audio;

    /**
     * @description The time when the media asset was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-07-19T03:45:25Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description [Details about image files](~~86991~~).
     *
     * @var image
     */
    public $image;

    /**
     * @description The ID of the media asset.
     *
     * @example a82a2cd7d4e147bbed6c1ee372****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The type of the media asset. Valid values:
     *
     *   **video**
     *   **audio**
     *   **image**
     *   **attached**
     *
     * @example video
     *
     * @var string
     */
    public $mediaType;

    /**
     * @description [Details about video files](~~86991~~).
     *
     * @var video
     */
    public $video;
    protected $_name = [
        'aiData'        => 'AiData',
        'aiRoughData'   => 'AiRoughData',
        'attachedMedia' => 'AttachedMedia',
        'audio'         => 'Audio',
        'creationTime'  => 'CreationTime',
        'image'         => 'Image',
        'mediaId'       => 'MediaId',
        'mediaType'     => 'MediaType',
        'video'         => 'Video',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiData) {
            $res['AiData'] = null !== $this->aiData ? $this->aiData->toMap() : null;
        }
        if (null !== $this->aiRoughData) {
            $res['AiRoughData'] = null !== $this->aiRoughData ? $this->aiRoughData->toMap() : null;
        }
        if (null !== $this->attachedMedia) {
            $res['AttachedMedia'] = null !== $this->attachedMedia ? $this->attachedMedia->toMap() : null;
        }
        if (null !== $this->audio) {
            $res['Audio'] = null !== $this->audio ? $this->audio->toMap() : null;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->image) {
            $res['Image'] = null !== $this->image ? $this->image->toMap() : null;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->video) {
            $res['Video'] = null !== $this->video ? $this->video->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AiData'])) {
            $model->aiData = aiData::fromMap($map['AiData']);
        }
        if (isset($map['AiRoughData'])) {
            $model->aiRoughData = aiRoughData::fromMap($map['AiRoughData']);
        }
        if (isset($map['AttachedMedia'])) {
            $model->attachedMedia = attachedMedia::fromMap($map['AttachedMedia']);
        }
        if (isset($map['Audio'])) {
            $model->audio = audio::fromMap($map['Audio']);
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Image'])) {
            $model->image = image::fromMap($map['Image']);
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['Video'])) {
            $model->video = video::fromMap($map['Video']);
        }

        return $model;
    }
}

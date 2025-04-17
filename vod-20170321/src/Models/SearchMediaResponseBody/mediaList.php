<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList\aiData;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList\aiRoughData;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList\attachedMedia;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList\audio;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList\image;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList\video;

class mediaList extends Model
{
    /**
     * @var aiData
     */
    public $aiData;

    /**
     * @var aiRoughData
     */
    public $aiRoughData;

    /**
     * @var attachedMedia
     */
    public $attachedMedia;

    /**
     * @var audio
     */
    public $audio;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var image
     */
    public $image;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $mediaType;

    /**
     * @var video
     */
    public $video;
    protected $_name = [
        'aiData' => 'AiData',
        'aiRoughData' => 'AiRoughData',
        'attachedMedia' => 'AttachedMedia',
        'audio' => 'Audio',
        'creationTime' => 'CreationTime',
        'image' => 'Image',
        'mediaId' => 'MediaId',
        'mediaType' => 'MediaType',
        'video' => 'Video',
    ];

    public function validate()
    {
        if (null !== $this->aiData) {
            $this->aiData->validate();
        }
        if (null !== $this->aiRoughData) {
            $this->aiRoughData->validate();
        }
        if (null !== $this->attachedMedia) {
            $this->attachedMedia->validate();
        }
        if (null !== $this->audio) {
            $this->audio->validate();
        }
        if (null !== $this->image) {
            $this->image->validate();
        }
        if (null !== $this->video) {
            $this->video->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiData) {
            $res['AiData'] = null !== $this->aiData ? $this->aiData->toArray($noStream) : $this->aiData;
        }

        if (null !== $this->aiRoughData) {
            $res['AiRoughData'] = null !== $this->aiRoughData ? $this->aiRoughData->toArray($noStream) : $this->aiRoughData;
        }

        if (null !== $this->attachedMedia) {
            $res['AttachedMedia'] = null !== $this->attachedMedia ? $this->attachedMedia->toArray($noStream) : $this->attachedMedia;
        }

        if (null !== $this->audio) {
            $res['Audio'] = null !== $this->audio ? $this->audio->toArray($noStream) : $this->audio;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->image) {
            $res['Image'] = null !== $this->image ? $this->image->toArray($noStream) : $this->image;
        }

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }

        if (null !== $this->video) {
            $res['Video'] = null !== $this->video ? $this->video->toArray($noStream) : $this->video;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

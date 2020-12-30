<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList\attachedMedia;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList\audio;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList\image;
use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList\video;
use AlibabaCloud\Tea\Model;

class mediaList extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var video
     */
    public $video;

    /**
     * @var attachedMedia
     */
    public $attachedMedia;

    /**
     * @var image
     */
    public $image;

    /**
     * @var string
     */
    public $mediaType;

    /**
     * @var audio
     */
    public $audio;

    /**
     * @var string
     */
    public $mediaId;
    protected $_name = [
        'creationTime'  => 'CreationTime',
        'video'         => 'Video',
        'attachedMedia' => 'AttachedMedia',
        'image'         => 'Image',
        'mediaType'     => 'MediaType',
        'audio'         => 'Audio',
        'mediaId'       => 'MediaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->video) {
            $res['Video'] = null !== $this->video ? $this->video->toMap() : null;
        }
        if (null !== $this->attachedMedia) {
            $res['AttachedMedia'] = null !== $this->attachedMedia ? $this->attachedMedia->toMap() : null;
        }
        if (null !== $this->image) {
            $res['Image'] = null !== $this->image ? $this->image->toMap() : null;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->audio) {
            $res['Audio'] = null !== $this->audio ? $this->audio->toMap() : null;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Video'])) {
            $model->video = video::fromMap($map['Video']);
        }
        if (isset($map['AttachedMedia'])) {
            $model->attachedMedia = attachedMedia::fromMap($map['AttachedMedia']);
        }
        if (isset($map['Image'])) {
            $model->image = image::fromMap($map['Image']);
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['Audio'])) {
            $model->audio = audio::fromMap($map['Audio']);
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        return $model;
    }
}

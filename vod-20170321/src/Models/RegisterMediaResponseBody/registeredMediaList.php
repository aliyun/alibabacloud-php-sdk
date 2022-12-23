<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\RegisterMediaResponseBody;

use AlibabaCloud\Tea\Model;

class registeredMediaList extends Model
{
    /**
     * @description The OSS URL of the media file.
     *
     * @example http://****.oss-cn-shanghai.aliyuncs.com/vod_sample_01.mp4
     *
     * @var string
     */
    public $fileURL;

    /**
     * @description The ID of the media file that is registered with ApsaraVideo VOD. If the registered media file is an audio or video file, the value of the VideoId parameter returned by ApsaraVideo VOD takes effect.
     *
     * @example d97af32828084d1896683b1aa38****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description Indicates whether the media file is newly registered or repeatedly registered. Valid values:
     * - **true**: The media file is newly registered.
     * - **false**: The media file is repeatedly registered.
     * @example false
     *
     * @var bool
     */
    public $newRegister;
    protected $_name = [
        'fileURL'     => 'FileURL',
        'mediaId'     => 'MediaId',
        'newRegister' => 'NewRegister',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->newRegister) {
            $res['NewRegister'] = $this->newRegister;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return registeredMediaList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['NewRegister'])) {
            $model->newRegister = $map['NewRegister'];
        }

        return $model;
    }
}

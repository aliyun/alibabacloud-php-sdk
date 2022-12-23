<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetVideoPlayAuthRequest extends Model
{
    /**
     * @description The API version number. Set the value to **1.0.0**.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $apiVersion;

    /**
     * @description The time when the playback credential expires. Unit: **seconds**. You cannot obtain the playback URL of a video by using a credential that has expired. A new credential is required.
     *   Default value: **100**.
     *   Valid values: `100 to 3000`.
     *
     * @example 100
     *
     * @var int
     */
    public $authInfoTimeout;

    /**
     * @description The ID of the audio or video file. You can use one of the following methods to obtain the ID of the file:
     *   Log on to the [ApsaraVideo VOD](https://vod.console.aliyun.com) console. In the left-side navigation pane, choose **Media Files** > **Audio/Video**. On the Video and Audio page, view the ID of the audio or video file. This method is applicable to files that are uploaded by using the ApsaraVideo VOD console.
     *   Obtain the value of the VideoId parameter when you call the [CreateUploadVideo](~~55407~~) operation to upload files.
     *   Obtain the value of the VideoId parameter by calling the [SearchMedia](~~86044~~) operation. This method is applicable to files that have been uploaded.
     *
     * @example dfde02284a5c46622a097adaf44a****
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'apiVersion'      => 'ApiVersion',
        'authInfoTimeout' => 'AuthInfoTimeout',
        'videoId'         => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiVersion) {
            $res['ApiVersion'] = $this->apiVersion;
        }
        if (null !== $this->authInfoTimeout) {
            $res['AuthInfoTimeout'] = $this->authInfoTimeout;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVideoPlayAuthRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiVersion'])) {
            $model->apiVersion = $map['ApiVersion'];
        }
        if (isset($map['AuthInfoTimeout'])) {
            $model->authInfoTimeout = $map['AuthInfoTimeout'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}

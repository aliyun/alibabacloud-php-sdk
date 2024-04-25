<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetTranscodeSummaryRequest extends Model
{
    /**
     * @description The ID of the audio or video file. You can specify up to 10 IDs. Separate the IDs with commas (,). You can use one of the following methods to obtain the ID:
     *
     *   After you upload a video in the [ApsaraVideo VOD console](https://vod.console.aliyun.com), you can log on to the ApsaraVideo VOD console and choose **Media Files** > **Audio/Video** to view the ID of the video.
     *   Obtain the value of VideoId from the response to the [CreateUploadVideo](~~55407~~) operation that you call to obtain the upload URL and credential.
     *   Obtain the value of VideoId by calling the [SearchMedia](~~86044~~) operation. This method is applicable to files that have been uploaded.
     *
     * @example "d4860fcc6ae9fed52e8938244****,e1db68cc586644b83e562bcd94****,hhhhhhh"
     *
     * @var string
     */
    public $videoIds;
    protected $_name = [
        'videoIds' => 'VideoIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoIds) {
            $res['VideoIds'] = $this->videoIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTranscodeSummaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoIds'])) {
            $model->videoIds = $map['VideoIds'];
        }

        return $model;
    }
}

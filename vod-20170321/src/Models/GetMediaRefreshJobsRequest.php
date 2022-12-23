<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetMediaRefreshJobsRequest extends Model
{
    /**
     * @description The ID of the media file. It is the value of the `MediaIds` parameter that you specify when you call the [RefreshMediaPlayUrls](~~RefreshMediaPlayUrls~~) operation. You can specify only one media ID.
     *
     * If you leave this parameter empty, information about all media files in the refresh or prefetch job specified by `MediaRefreshJobId` is returned. If you set this parameter, only the information about the specified media file is returned.``
     * @example ca3a8f6e4957b658067095869****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The ID of the refresh or prefetch job. It is the value of the MediaRefreshJobId parameter that is returned from the call to the [RefreshMediaPlayUrls](~~RefreshMediaPlayUrls~~) operation.
     *
     * @example 41d465e31957****
     *
     * @var string
     */
    public $mediaRefreshJobId;
    protected $_name = [
        'mediaId'           => 'MediaId',
        'mediaRefreshJobId' => 'MediaRefreshJobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->mediaRefreshJobId) {
            $res['MediaRefreshJobId'] = $this->mediaRefreshJobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMediaRefreshJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaRefreshJobId'])) {
            $model->mediaRefreshJobId = $map['MediaRefreshJobId'];
        }

        return $model;
    }
}

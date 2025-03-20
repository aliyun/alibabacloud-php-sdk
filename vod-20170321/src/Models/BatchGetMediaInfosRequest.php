<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class BatchGetMediaInfosRequest extends Model
{
    /**
     * @description The ID of the media asset. The ID can be the video ID or audio ID. Separate IDs with commas (,). You can specify a maximum of 20 IDs. You can use one of the following methods to obtain the ID of the media asset:
     *
     *   Log on to the ApsaraVideo VOD console. In the left-side navigation pane, choose Media Files > Audio/Video. On the Video and Audio page, view the ID of the media asset. This method is applicable to files that are uploaded by using the ApsaraVideo VOD console.
     *   Obtain the value of VideoId from the response to the CreateUploadVideo operation that you call to upload media assets.
     *   Obtain the value of VideoId from the response to the SearchMedia operation that you call to query the media ID after the media asset is uploaded.
     *
     * This parameter is required.
     *
     * @example 61ccbdb06fa83012be4d8083f6****,7d2fbc380b0e08e55f****
     *
     * @var string
     */
    public $mediaIds;
    protected $_name = [
        'mediaIds' => 'MediaIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetMediaInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }

        return $model;
    }
}

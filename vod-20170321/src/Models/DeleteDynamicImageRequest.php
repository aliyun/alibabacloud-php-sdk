<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteDynamicImageRequest extends Model
{
    /**
     * @description The IDs of the animated stickers.
     *
     * - If you do not set this parameter, the system finds the video specified by the VideoId parameter and deletes the information about the animated stickers associated with the video. If more than 10 animated stickers are associated with the video specified by the VideoId parameter, the deletion request is denied.
     * @example beafec3834a4e52ea52042a4****,8281c8519847fd8970e79e80b6****
     *
     * @var string
     */
    public $dynamicImageIds;

    /**
     * @description The ID of the video associated with the animated stickers whose information you want to delete.
     *
     * @example 2321077d460b028700ef6c2f4d****
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'dynamicImageIds' => 'DynamicImageIds',
        'videoId'         => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dynamicImageIds) {
            $res['DynamicImageIds'] = $this->dynamicImageIds;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDynamicImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DynamicImageIds'])) {
            $model->dynamicImageIds = $map['DynamicImageIds'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}

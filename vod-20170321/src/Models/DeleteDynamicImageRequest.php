<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteDynamicImageRequest extends Model
{
    /**
     * @var string
     */
    public $videoId;

    /**
     * @var string
     */
    public $dynamicImageIds;
    protected $_name = [
        'videoId'         => 'VideoId',
        'dynamicImageIds' => 'DynamicImageIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->dynamicImageIds) {
            $res['DynamicImageIds'] = $this->dynamicImageIds;
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
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['DynamicImageIds'])) {
            $model->dynamicImageIds = $map['DynamicImageIds'];
        }

        return $model;
    }
}

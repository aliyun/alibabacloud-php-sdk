<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetVideoInfosRequest extends Model
{
    /**
     * @description The list of video IDs. Separate multiple IDs with commas (,). A maximum of 20 IDs can be specified.
     *
     * @example 7753d144efd8e649c6c45fe0579****,7753d144efd74d6c45fe0570****
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
     * @return GetVideoInfosRequest
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

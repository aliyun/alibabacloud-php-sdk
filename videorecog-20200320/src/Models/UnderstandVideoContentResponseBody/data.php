<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\UnderstandVideoContentResponseBody;

use AlibabaCloud\SDK\Videorecog\V20200320\Models\UnderstandVideoContentResponseBody\data\videoInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $tagInfo;

    /**
     * @var videoInfo
     */
    public $videoInfo;
    protected $_name = [
        'tagInfo'   => 'TagInfo',
        'videoInfo' => 'VideoInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagInfo) {
            $res['TagInfo'] = $this->tagInfo;
        }
        if (null !== $this->videoInfo) {
            $res['VideoInfo'] = null !== $this->videoInfo ? $this->videoInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagInfo'])) {
            $model->tagInfo = $map['TagInfo'];
        }
        if (isset($map['VideoInfo'])) {
            $model->videoInfo = videoInfo::fromMap($map['VideoInfo']);
        }

        return $model;
    }
}

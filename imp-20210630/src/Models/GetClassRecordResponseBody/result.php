<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\GetClassRecordResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string[][]
     */
    public $playbackUrlMap;
    protected $_name = [
        'playbackUrlMap' => 'PlaybackUrlMap',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->playbackUrlMap) {
            $res['PlaybackUrlMap'] = $this->playbackUrlMap;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlaybackUrlMap'])) {
            $model->playbackUrlMap = $map['PlaybackUrlMap'];
        }

        return $model;
    }
}

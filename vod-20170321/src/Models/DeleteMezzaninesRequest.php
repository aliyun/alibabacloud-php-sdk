<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteMezzaninesRequest extends Model
{
    /**
     * @description Specifies whether to forcibly delete the mezzanine file. Default value: **false**.
     *
     * > If a video is delivered without transcoding or is asynchronously transcoded, the mezzanine file of the video is used for original-quality playback. By default, the mezzanine file of the video cannot be deleted. To forcibly delete the mezzanine file, set this parameter to **true**.
     * @example false
     *
     * @var bool
     */
    public $force;

    /**
     * @description The list of video IDs. A maximum of 20 video IDs can be specified at a time. Separate multiple IDs with commas (,).
     *
     * @example 23ab850b4f654b6e91d24d8157****,93ab850b4f6f4b6e91d24d81d4****
     *
     * @var string
     */
    public $videoIds;
    protected $_name = [
        'force'    => 'Force',
        'videoIds' => 'VideoIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->videoIds) {
            $res['VideoIds'] = $this->videoIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMezzaninesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['VideoIds'])) {
            $model->videoIds = $map['VideoIds'];
        }

        return $model;
    }
}

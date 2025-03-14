<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\CreateVodPackagingConfigurationRequest\packageConfig;

use AlibabaCloud\Tea\Model;

class streamSelection extends Model
{
    /**
     * @description The maximum bitrate of the video stream. Unit: bit/s.
     *
     * @example 1000000000
     *
     * @var int
     */
    public $maxVideoBitsPerSecond;

    /**
     * @description The minimum bitrate of the video stream. Unit: bit/s.
     *
     * @example 100000
     *
     * @var int
     */
    public $minVideoBitsPerSecond;

    /**
     * @description The order of manifest files in the master playlist. Valid values:
     *
     *   ORIGINAL: sorts the manifest files in the same order as the source.
     *   VIDEO_BITRATE_ASCENDING: sorts the manifest files in ascending order of bitrates, from lowest to highest.
     *   VIDEO_BITRATE_DESCENDING: sorts the manifest files in descending order of bitrates, from highest to lowest.
     *
     * @example ORIGINAL
     *
     * @var string
     */
    public $streamOrder;
    protected $_name = [
        'maxVideoBitsPerSecond' => 'MaxVideoBitsPerSecond',
        'minVideoBitsPerSecond' => 'MinVideoBitsPerSecond',
        'streamOrder' => 'StreamOrder',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxVideoBitsPerSecond) {
            $res['MaxVideoBitsPerSecond'] = $this->maxVideoBitsPerSecond;
        }
        if (null !== $this->minVideoBitsPerSecond) {
            $res['MinVideoBitsPerSecond'] = $this->minVideoBitsPerSecond;
        }
        if (null !== $this->streamOrder) {
            $res['StreamOrder'] = $this->streamOrder;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamSelection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxVideoBitsPerSecond'])) {
            $model->maxVideoBitsPerSecond = $map['MaxVideoBitsPerSecond'];
        }
        if (isset($map['MinVideoBitsPerSecond'])) {
            $model->minVideoBitsPerSecond = $map['MinVideoBitsPerSecond'];
        }
        if (isset($map['StreamOrder'])) {
            $model->streamOrder = $map['StreamOrder'];
        }

        return $model;
    }
}

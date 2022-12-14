<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;

class EraseVideoSubtitlesRequest extends Model
{
    /**
     * @example 0.25
     *
     * @var float
     */
    public $BH;

    /**
     * @example 1
     *
     * @var float
     */
    public $BW;

    /**
     * @example 0
     *
     * @var float
     */
    public $BX;

    /**
     * @example 0.75
     *
     * @var float
     */
    public $BY;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoenhan/EraseVideoSubtitles/EraseVideoSubtitles1.mp4
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'BH'       => 'BH',
        'BW'       => 'BW',
        'BX'       => 'BX',
        'BY'       => 'BY',
        'videoUrl' => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->BH) {
            $res['BH'] = $this->BH;
        }
        if (null !== $this->BW) {
            $res['BW'] = $this->BW;
        }
        if (null !== $this->BX) {
            $res['BX'] = $this->BX;
        }
        if (null !== $this->BY) {
            $res['BY'] = $this->BY;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EraseVideoSubtitlesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BH'])) {
            $model->BH = $map['BH'];
        }
        if (isset($map['BW'])) {
            $model->BW = $map['BW'];
        }
        if (isset($map['BX'])) {
            $model->BX = $map['BX'];
        }
        if (isset($map['BY'])) {
            $model->BY = $map['BY'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}

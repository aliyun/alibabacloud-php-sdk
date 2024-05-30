<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Tea\Model;

class AbstractFilmVideoRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 5
     *
     * @var int
     */
    public $length;

    /**
     * @description This parameter is required.
     *
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/videoenhan/AbstractFilmVideo/AbstractFilmVideo1.mp4
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'length'   => 'Length',
        'videoUrl' => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AbstractFilmVideoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}

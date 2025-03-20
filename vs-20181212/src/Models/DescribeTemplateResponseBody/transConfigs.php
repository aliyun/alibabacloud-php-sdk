<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class transConfigs extends Model
{
    /**
     * @example 25
     *
     * @var int
     */
    public $fps;

    /**
     * @example 50
     *
     * @var int
     */
    public $gop;

    /**
     * @example 720
     *
     * @var int
     */
    public $height;

    /**
     * @example 399*****430-cn-qingdao
     *
     * @var string
     */
    public $id;

    /**
     * @example sd
     *
     * @var string
     */
    public $name;

    /**
     * @example 800
     *
     * @var int
     */
    public $videoBitrate;

    /**
     * @example h264
     *
     * @var string
     */
    public $videoCodec;

    /**
     * @example 1280
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'fps' => 'Fps',
        'gop' => 'Gop',
        'height' => 'Height',
        'id' => 'Id',
        'name' => 'Name',
        'videoBitrate' => 'VideoBitrate',
        'videoCodec' => 'VideoCodec',
        'width' => 'Width',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->gop) {
            $res['Gop'] = $this->gop;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->videoBitrate) {
            $res['VideoBitrate'] = $this->videoBitrate;
        }
        if (null !== $this->videoCodec) {
            $res['VideoCodec'] = $this->videoCodec;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['Gop'])) {
            $model->gop = $map['Gop'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['VideoBitrate'])) {
            $model->videoBitrate = $map['VideoBitrate'];
        }
        if (isset($map['VideoCodec'])) {
            $model->videoCodec = $map['VideoCodec'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}

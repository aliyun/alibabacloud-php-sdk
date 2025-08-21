<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeTemplateResponseBody;

use AlibabaCloud\Dara\Model;

class transConfigs extends Model
{
    /**
     * @var int
     */
    public $fps;

    /**
     * @var int
     */
    public $gop;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $videoBitrate;

    /**
     * @var string
     */
    public $videoCodec;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

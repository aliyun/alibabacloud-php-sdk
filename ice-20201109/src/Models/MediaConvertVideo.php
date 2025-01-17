<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class MediaConvertVideo extends Model
{
    /**
     * @var int
     */
    public $bitrate;
    /**
     * @var int
     */
    public $bufsize;
    /**
     * @var string
     */
    public $codec;
    /**
     * @var mixed
     */
    public $crf;
    /**
     * @var string
     */
    public $crop;
    /**
     * @var mixed
     */
    public $fps;
    /**
     * @var mixed
     */
    public $gop;
    /**
     * @var int
     */
    public $height;
    /**
     * @var bool
     */
    public $longShortMode;
    /**
     * @var mixed
     */
    public $maxFps;
    /**
     * @var int
     */
    public $maxrate;
    /**
     * @var string
     */
    public $pad;
    /**
     * @var string
     */
    public $profile;
    /**
     * @var int
     */
    public $qscale;
    /**
     * @var bool
     */
    public $remove;
    /**
     * @var string
     */
    public $scanMode;
    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'bitrate'       => 'Bitrate',
        'bufsize'       => 'Bufsize',
        'codec'         => 'Codec',
        'crf'           => 'Crf',
        'crop'          => 'Crop',
        'fps'           => 'Fps',
        'gop'           => 'Gop',
        'height'        => 'Height',
        'longShortMode' => 'LongShortMode',
        'maxFps'        => 'MaxFps',
        'maxrate'       => 'Maxrate',
        'pad'           => 'Pad',
        'profile'       => 'Profile',
        'qscale'        => 'Qscale',
        'remove'        => 'Remove',
        'scanMode'      => 'ScanMode',
        'width'         => 'Width',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }

        if (null !== $this->bufsize) {
            $res['Bufsize'] = $this->bufsize;
        }

        if (null !== $this->codec) {
            $res['Codec'] = $this->codec;
        }

        if (null !== $this->crf) {
            $res['Crf'] = $this->crf;
        }

        if (null !== $this->crop) {
            $res['Crop'] = $this->crop;
        }

        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }

        if (null !== $this->gop) {
            $res['Gop'] = $this->gop;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->longShortMode) {
            $res['LongShortMode'] = $this->longShortMode;
        }

        if (null !== $this->maxFps) {
            $res['MaxFps'] = $this->maxFps;
        }

        if (null !== $this->maxrate) {
            $res['Maxrate'] = $this->maxrate;
        }

        if (null !== $this->pad) {
            $res['Pad'] = $this->pad;
        }

        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }

        if (null !== $this->qscale) {
            $res['Qscale'] = $this->qscale;
        }

        if (null !== $this->remove) {
            $res['Remove'] = $this->remove;
        }

        if (null !== $this->scanMode) {
            $res['ScanMode'] = $this->scanMode;
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
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }

        if (isset($map['Bufsize'])) {
            $model->bufsize = $map['Bufsize'];
        }

        if (isset($map['Codec'])) {
            $model->codec = $map['Codec'];
        }

        if (isset($map['Crf'])) {
            $model->crf = $map['Crf'];
        }

        if (isset($map['Crop'])) {
            $model->crop = $map['Crop'];
        }

        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }

        if (isset($map['Gop'])) {
            $model->gop = $map['Gop'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['LongShortMode'])) {
            $model->longShortMode = $map['LongShortMode'];
        }

        if (isset($map['MaxFps'])) {
            $model->maxFps = $map['MaxFps'];
        }

        if (isset($map['Maxrate'])) {
            $model->maxrate = $map['Maxrate'];
        }

        if (isset($map['Pad'])) {
            $model->pad = $map['Pad'];
        }

        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }

        if (isset($map['Qscale'])) {
            $model->qscale = $map['Qscale'];
        }

        if (isset($map['Remove'])) {
            $model->remove = $map['Remove'];
        }

        if (isset($map['ScanMode'])) {
            $model->scanMode = $map['ScanMode'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}

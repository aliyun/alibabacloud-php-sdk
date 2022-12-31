<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\processConfig\transcode\overwriteParams;

use AlibabaCloud\Tea\Model;

class video extends Model
{
    /**
     * @example 6000
     *
     * @var string
     */
    public $abrMax;

    /**
     * @example 3000
     *
     * @var string
     */
    public $bitrate;

    /**
     * @example 6000
     *
     * @var string
     */
    public $bufsize;

    /**
     * @example H.264
     *
     * @var string
     */
    public $codec;

    /**
     * @example 23
     *
     * @var string
     */
    public $crf;

    /**
     * @example 1280:800:0:140
     *
     * @var string
     */
    public $crop;

    /**
     * @example 25
     *
     * @var string
     */
    public $fps;

    /**
     * @example 250
     *
     * @var string
     */
    public $gop;

    /**
     * @example 1080
     *
     * @var string
     */
    public $height;

    /**
     * @example false
     *
     * @var string
     */
    public $longShortMode;

    /**
     * @example 9000
     *
     * @var string
     */
    public $maxrate;

    /**
     * @example 1280:800:0:140
     *
     * @var string
     */
    public $pad;

    /**
     * @example yuv420p
     *
     * @var string
     */
    public $pixFmt;

    /**
     * @example medium
     *
     * @var string
     */
    public $preset;

    /**
     * @example Main
     *
     * @var string
     */
    public $profile;

    /**
     * @example false
     *
     * @var string
     */
    public $remove;

    /**
     * @example progressive
     *
     * @var string
     */
    public $scanMode;

    /**
     * @example 1920
     *
     * @var string
     */
    public $width;
    protected $_name = [
        'abrMax'        => 'AbrMax',
        'bitrate'       => 'Bitrate',
        'bufsize'       => 'Bufsize',
        'codec'         => 'Codec',
        'crf'           => 'Crf',
        'crop'          => 'Crop',
        'fps'           => 'Fps',
        'gop'           => 'Gop',
        'height'        => 'Height',
        'longShortMode' => 'LongShortMode',
        'maxrate'       => 'Maxrate',
        'pad'           => 'Pad',
        'pixFmt'        => 'PixFmt',
        'preset'        => 'Preset',
        'profile'       => 'Profile',
        'remove'        => 'Remove',
        'scanMode'      => 'ScanMode',
        'width'         => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abrMax) {
            $res['AbrMax'] = $this->abrMax;
        }
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
        if (null !== $this->maxrate) {
            $res['Maxrate'] = $this->maxrate;
        }
        if (null !== $this->pad) {
            $res['Pad'] = $this->pad;
        }
        if (null !== $this->pixFmt) {
            $res['PixFmt'] = $this->pixFmt;
        }
        if (null !== $this->preset) {
            $res['Preset'] = $this->preset;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
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

    /**
     * @param array $map
     *
     * @return video
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbrMax'])) {
            $model->abrMax = $map['AbrMax'];
        }
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
        if (isset($map['Maxrate'])) {
            $model->maxrate = $map['Maxrate'];
        }
        if (isset($map['Pad'])) {
            $model->pad = $map['Pad'];
        }
        if (isset($map['PixFmt'])) {
            $model->pixFmt = $map['PixFmt'];
        }
        if (isset($map['Preset'])) {
            $model->preset = $map['Preset'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
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

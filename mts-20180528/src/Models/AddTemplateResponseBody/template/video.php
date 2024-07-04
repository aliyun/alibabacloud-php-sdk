<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\AddTemplateResponseBody\template;

use AlibabaCloud\SDK\Mts\V20180528\Models\AddTemplateResponseBody\template\video\bitrateBnd;
use AlibabaCloud\Tea\Model;

class video extends Model
{
    /**
     * @example 100
     *
     * @var string
     */
    public $bitrate;

    /**
     * @var bitrateBnd
     */
    public $bitrateBnd;

    /**
     * @example 1000
     *
     * @var string
     */
    public $bufsize;

    /**
     * @example aac
     *
     * @var string
     */
    public $codec;

    /**
     * @example 15
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
     * @example 5
     *
     * @var string
     */
    public $degrain;

    /**
     * @example 50
     *
     * @var string
     */
    public $fps;

    /**
     * @example 10
     *
     * @var string
     */
    public $gop;

    /**
     * @example 800
     *
     * @var string
     */
    public $height;

    /**
     * @example 20
     *
     * @var string
     */
    public $maxFps;

    /**
     * @example 10
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
     * @example high
     *
     * @var string
     */
    public $profile;

    /**
     * @example 20
     *
     * @var string
     */
    public $qscale;

    /**
     * @example false
     *
     * @var string
     */
    public $remove;

    /**
     * @example cropFirst
     *
     * @var string
     */
    public $resoPriority;

    /**
     * @example interlaced
     *
     * @var string
     */
    public $scanMode;

    /**
     * @example 129
     *
     * @var string
     */
    public $width;
    protected $_name = [
        'bitrate'      => 'Bitrate',
        'bitrateBnd'   => 'BitrateBnd',
        'bufsize'      => 'Bufsize',
        'codec'        => 'Codec',
        'crf'          => 'Crf',
        'crop'         => 'Crop',
        'degrain'      => 'Degrain',
        'fps'          => 'Fps',
        'gop'          => 'Gop',
        'height'       => 'Height',
        'maxFps'       => 'MaxFps',
        'maxrate'      => 'Maxrate',
        'pad'          => 'Pad',
        'pixFmt'       => 'PixFmt',
        'preset'       => 'Preset',
        'profile'      => 'Profile',
        'qscale'       => 'Qscale',
        'remove'       => 'Remove',
        'resoPriority' => 'ResoPriority',
        'scanMode'     => 'ScanMode',
        'width'        => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->bitrateBnd) {
            $res['BitrateBnd'] = null !== $this->bitrateBnd ? $this->bitrateBnd->toMap() : null;
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
        if (null !== $this->degrain) {
            $res['Degrain'] = $this->degrain;
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
        if (null !== $this->maxFps) {
            $res['MaxFps'] = $this->maxFps;
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
        if (null !== $this->qscale) {
            $res['Qscale'] = $this->qscale;
        }
        if (null !== $this->remove) {
            $res['Remove'] = $this->remove;
        }
        if (null !== $this->resoPriority) {
            $res['ResoPriority'] = $this->resoPriority;
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
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['BitrateBnd'])) {
            $model->bitrateBnd = bitrateBnd::fromMap($map['BitrateBnd']);
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
        if (isset($map['Degrain'])) {
            $model->degrain = $map['Degrain'];
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
        if (isset($map['MaxFps'])) {
            $model->maxFps = $map['MaxFps'];
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
        if (isset($map['Qscale'])) {
            $model->qscale = $map['Qscale'];
        }
        if (isset($map['Remove'])) {
            $model->remove = $map['Remove'];
        }
        if (isset($map['ResoPriority'])) {
            $model->resoPriority = $map['ResoPriority'];
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

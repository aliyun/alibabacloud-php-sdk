<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig;

use AlibabaCloud\SDK\Mts\V20140618\Models\SubmitEditingJobsResponseBody\jobResultList\jobResult\job\editingConfig\video\bitrateBnd;
use AlibabaCloud\Tea\Model;

class video extends Model
{
    /**
     * @var string
     */
    public $codec;

    /**
     * @var string
     */
    public $profile;

    /**
     * @var string
     */
    public $bitrate;

    /**
     * @var string
     */
    public $crf;

    /**
     * @var string
     */
    public $width;

    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $fps;

    /**
     * @var string
     */
    public $gop;

    /**
     * @var string
     */
    public $preset;

    /**
     * @var string
     */
    public $scanMode;

    /**
     * @var string
     */
    public $bufsize;

    /**
     * @var string
     */
    public $maxrate;

    /**
     * @var string
     */
    public $pixFmt;

    /**
     * @var string
     */
    public $degrain;

    /**
     * @var string
     */
    public $qscale;

    /**
     * @var string
     */
    public $crop;

    /**
     * @var string
     */
    public $pad;

    /**
     * @var string
     */
    public $maxFps;

    /**
     * @var bitrateBnd
     */
    public $bitrateBnd;
    protected $_name = [
        'codec'      => 'Codec',
        'profile'    => 'Profile',
        'bitrate'    => 'Bitrate',
        'crf'        => 'Crf',
        'width'      => 'Width',
        'height'     => 'Height',
        'fps'        => 'Fps',
        'gop'        => 'Gop',
        'preset'     => 'Preset',
        'scanMode'   => 'ScanMode',
        'bufsize'    => 'Bufsize',
        'maxrate'    => 'Maxrate',
        'pixFmt'     => 'PixFmt',
        'degrain'    => 'Degrain',
        'qscale'     => 'Qscale',
        'crop'       => 'Crop',
        'pad'        => 'Pad',
        'maxFps'     => 'MaxFps',
        'bitrateBnd' => 'BitrateBnd',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codec) {
            $res['Codec'] = $this->codec;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }
        if (null !== $this->crf) {
            $res['Crf'] = $this->crf;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->gop) {
            $res['Gop'] = $this->gop;
        }
        if (null !== $this->preset) {
            $res['Preset'] = $this->preset;
        }
        if (null !== $this->scanMode) {
            $res['ScanMode'] = $this->scanMode;
        }
        if (null !== $this->bufsize) {
            $res['Bufsize'] = $this->bufsize;
        }
        if (null !== $this->maxrate) {
            $res['Maxrate'] = $this->maxrate;
        }
        if (null !== $this->pixFmt) {
            $res['PixFmt'] = $this->pixFmt;
        }
        if (null !== $this->degrain) {
            $res['Degrain'] = $this->degrain;
        }
        if (null !== $this->qscale) {
            $res['Qscale'] = $this->qscale;
        }
        if (null !== $this->crop) {
            $res['Crop'] = $this->crop;
        }
        if (null !== $this->pad) {
            $res['Pad'] = $this->pad;
        }
        if (null !== $this->maxFps) {
            $res['MaxFps'] = $this->maxFps;
        }
        if (null !== $this->bitrateBnd) {
            $res['BitrateBnd'] = null !== $this->bitrateBnd ? $this->bitrateBnd->toMap() : null;
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
        if (isset($map['Codec'])) {
            $model->codec = $map['Codec'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['Bitrate'])) {
            $model->bitrate = $map['Bitrate'];
        }
        if (isset($map['Crf'])) {
            $model->crf = $map['Crf'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['Gop'])) {
            $model->gop = $map['Gop'];
        }
        if (isset($map['Preset'])) {
            $model->preset = $map['Preset'];
        }
        if (isset($map['ScanMode'])) {
            $model->scanMode = $map['ScanMode'];
        }
        if (isset($map['Bufsize'])) {
            $model->bufsize = $map['Bufsize'];
        }
        if (isset($map['Maxrate'])) {
            $model->maxrate = $map['Maxrate'];
        }
        if (isset($map['PixFmt'])) {
            $model->pixFmt = $map['PixFmt'];
        }
        if (isset($map['Degrain'])) {
            $model->degrain = $map['Degrain'];
        }
        if (isset($map['Qscale'])) {
            $model->qscale = $map['Qscale'];
        }
        if (isset($map['Crop'])) {
            $model->crop = $map['Crop'];
        }
        if (isset($map['Pad'])) {
            $model->pad = $map['Pad'];
        }
        if (isset($map['MaxFps'])) {
            $model->maxFps = $map['MaxFps'];
        }
        if (isset($map['BitrateBnd'])) {
            $model->bitrateBnd = bitrateBnd::fromMap($map['BitrateBnd']);
        }

        return $model;
    }
}

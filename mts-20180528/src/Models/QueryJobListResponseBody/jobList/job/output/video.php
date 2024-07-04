<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20180528\Models\QueryJobListResponseBody\jobList\job\output;

use AlibabaCloud\SDK\Mts\V20180528\Models\QueryJobListResponseBody\jobList\job\output\video\bitrateBnd;
use AlibabaCloud\Tea\Model;

class video extends Model
{
    /**
     * @var string
     */
    public $bitrate;

    /**
     * @var bitrateBnd
     */
    public $bitrateBnd;

    /**
     * @var string
     */
    public $bufsize;

    /**
     * @var string
     */
    public $codec;

    /**
     * @var string
     */
    public $crf;

    /**
     * @var string
     */
    public $crop;

    /**
     * @var string
     */
    public $degrain;

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
    public $height;

    /**
     * @var string
     */
    public $maxFps;

    /**
     * @var string
     */
    public $maxrate;

    /**
     * @var string
     */
    public $pad;

    /**
     * @var string
     */
    public $pixFmt;

    /**
     * @var string
     */
    public $preset;

    /**
     * @var string
     */
    public $profile;

    /**
     * @var string
     */
    public $qscale;

    /**
     * @var string
     */
    public $resoPriority;

    /**
     * @var string
     */
    public $scanMode;

    /**
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SearchTemplateResponseBody\templateList\template;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchTemplateResponseBody\templateList\template\video\bitrateBnd;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchTemplateResponseBody\templateList\template\video\narrowBand;

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
    public $hdr2sdr;

    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $longShortMode;

    /**
     * @var string
     */
    public $maxFps;

    /**
     * @var string
     */
    public $maxrate;

    /**
     * @var narrowBand
     */
    public $narrowBand;

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
    public $remove;

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
        'bitrate' => 'Bitrate',
        'bitrateBnd' => 'BitrateBnd',
        'bufsize' => 'Bufsize',
        'codec' => 'Codec',
        'crf' => 'Crf',
        'crop' => 'Crop',
        'degrain' => 'Degrain',
        'fps' => 'Fps',
        'gop' => 'Gop',
        'hdr2sdr' => 'Hdr2sdr',
        'height' => 'Height',
        'longShortMode' => 'LongShortMode',
        'maxFps' => 'MaxFps',
        'maxrate' => 'Maxrate',
        'narrowBand' => 'NarrowBand',
        'pad' => 'Pad',
        'pixFmt' => 'PixFmt',
        'preset' => 'Preset',
        'profile' => 'Profile',
        'qscale' => 'Qscale',
        'remove' => 'Remove',
        'resoPriority' => 'ResoPriority',
        'scanMode' => 'ScanMode',
        'width' => 'Width',
    ];

    public function validate()
    {
        if (null !== $this->bitrateBnd) {
            $this->bitrateBnd->validate();
        }
        if (null !== $this->narrowBand) {
            $this->narrowBand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bitrate) {
            $res['Bitrate'] = $this->bitrate;
        }

        if (null !== $this->bitrateBnd) {
            $res['BitrateBnd'] = null !== $this->bitrateBnd ? $this->bitrateBnd->toArray($noStream) : $this->bitrateBnd;
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

        if (null !== $this->hdr2sdr) {
            $res['Hdr2sdr'] = $this->hdr2sdr;
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

        if (null !== $this->narrowBand) {
            $res['NarrowBand'] = null !== $this->narrowBand ? $this->narrowBand->toArray($noStream) : $this->narrowBand;
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

        if (isset($map['Hdr2sdr'])) {
            $model->hdr2sdr = $map['Hdr2sdr'];
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

        if (isset($map['NarrowBand'])) {
            $model->narrowBand = narrowBand::fromMap($map['NarrowBand']);
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

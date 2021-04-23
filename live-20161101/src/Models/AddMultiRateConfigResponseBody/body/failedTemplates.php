<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\AddMultiRateConfigResponseBody\body;

use AlibabaCloud\Tea\Model;

class failedTemplates extends Model
{
    /**
     * @var int
     */
    public $audioBitrate;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $template;

    /**
     * @var string
     */
    public $templateType;

    /**
     * @var int
     */
    public $bandWidth;

    /**
     * @var int
     */
    public $profile;

    /**
     * @var int
     */
    public $audioRate;

    /**
     * @var string
     */
    public $audioCodec;

    /**
     * @var string
     */
    public $gop;

    /**
     * @var int
     */
    public $videoBitrate;

    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $audioChannelNum;

    /**
     * @var int
     */
    public $fps;

    /**
     * @var string
     */
    public $audioProfile;
    protected $_name = [
        'audioBitrate'    => 'AudioBitrate',
        'height'          => 'Height',
        'template'        => 'Template',
        'templateType'    => 'TemplateType',
        'bandWidth'       => 'BandWidth',
        'profile'         => 'Profile',
        'audioRate'       => 'AudioRate',
        'audioCodec'      => 'AudioCodec',
        'gop'             => 'Gop',
        'videoBitrate'    => 'VideoBitrate',
        'width'           => 'Width',
        'audioChannelNum' => 'AudioChannelNum',
        'fps'             => 'Fps',
        'audioProfile'    => 'AudioProfile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioBitrate) {
            $res['AudioBitrate'] = $this->audioBitrate;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->bandWidth) {
            $res['BandWidth'] = $this->bandWidth;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->audioRate) {
            $res['AudioRate'] = $this->audioRate;
        }
        if (null !== $this->audioCodec) {
            $res['AudioCodec'] = $this->audioCodec;
        }
        if (null !== $this->gop) {
            $res['Gop'] = $this->gop;
        }
        if (null !== $this->videoBitrate) {
            $res['VideoBitrate'] = $this->videoBitrate;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->audioChannelNum) {
            $res['AudioChannelNum'] = $this->audioChannelNum;
        }
        if (null !== $this->fps) {
            $res['Fps'] = $this->fps;
        }
        if (null !== $this->audioProfile) {
            $res['AudioProfile'] = $this->audioProfile;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failedTemplates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioBitrate'])) {
            $model->audioBitrate = $map['AudioBitrate'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['BandWidth'])) {
            $model->bandWidth = $map['BandWidth'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['AudioRate'])) {
            $model->audioRate = $map['AudioRate'];
        }
        if (isset($map['AudioCodec'])) {
            $model->audioCodec = $map['AudioCodec'];
        }
        if (isset($map['Gop'])) {
            $model->gop = $map['Gop'];
        }
        if (isset($map['VideoBitrate'])) {
            $model->videoBitrate = $map['VideoBitrate'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['AudioChannelNum'])) {
            $model->audioChannelNum = $map['AudioChannelNum'];
        }
        if (isset($map['Fps'])) {
            $model->fps = $map['Fps'];
        }
        if (isset($map['AudioProfile'])) {
            $model->audioProfile = $map['AudioProfile'];
        }

        return $model;
    }
}

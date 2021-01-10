<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddCustomLiveStreamTranscodeRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $app;

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
    public $height;

    /**
     * @var int
     */
    public $width;

    /**
     * @var int
     */
    public $FPS;

    /**
     * @var int
     */
    public $videoBitrate;

    /**
     * @var int
     */
    public $audioBitrate;

    /**
     * @var string
     */
    public $gop;

    /**
     * @var int
     */
    public $profile;

    /**
     * @var string
     */
    public $audioProfile;

    /**
     * @var string
     */
    public $audioCodec;

    /**
     * @var int
     */
    public $audioRate;

    /**
     * @var int
     */
    public $audioChannelNum;

    /**
     * @var string
     */
    public $lazy;
    protected $_name = [
        'ownerId'         => 'OwnerId',
        'domain'          => 'Domain',
        'app'             => 'App',
        'template'        => 'Template',
        'templateType'    => 'TemplateType',
        'height'          => 'Height',
        'width'           => 'Width',
        'FPS'             => 'FPS',
        'videoBitrate'    => 'VideoBitrate',
        'audioBitrate'    => 'AudioBitrate',
        'gop'             => 'Gop',
        'profile'         => 'Profile',
        'audioProfile'    => 'AudioProfile',
        'audioCodec'      => 'AudioCodec',
        'audioRate'       => 'AudioRate',
        'audioChannelNum' => 'AudioChannelNum',
        'lazy'            => 'Lazy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->FPS) {
            $res['FPS'] = $this->FPS;
        }
        if (null !== $this->videoBitrate) {
            $res['VideoBitrate'] = $this->videoBitrate;
        }
        if (null !== $this->audioBitrate) {
            $res['AudioBitrate'] = $this->audioBitrate;
        }
        if (null !== $this->gop) {
            $res['Gop'] = $this->gop;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->audioProfile) {
            $res['AudioProfile'] = $this->audioProfile;
        }
        if (null !== $this->audioCodec) {
            $res['AudioCodec'] = $this->audioCodec;
        }
        if (null !== $this->audioRate) {
            $res['AudioRate'] = $this->audioRate;
        }
        if (null !== $this->audioChannelNum) {
            $res['AudioChannelNum'] = $this->audioChannelNum;
        }
        if (null !== $this->lazy) {
            $res['Lazy'] = $this->lazy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCustomLiveStreamTranscodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['FPS'])) {
            $model->FPS = $map['FPS'];
        }
        if (isset($map['VideoBitrate'])) {
            $model->videoBitrate = $map['VideoBitrate'];
        }
        if (isset($map['AudioBitrate'])) {
            $model->audioBitrate = $map['AudioBitrate'];
        }
        if (isset($map['Gop'])) {
            $model->gop = $map['Gop'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['AudioProfile'])) {
            $model->audioProfile = $map['AudioProfile'];
        }
        if (isset($map['AudioCodec'])) {
            $model->audioCodec = $map['AudioCodec'];
        }
        if (isset($map['AudioRate'])) {
            $model->audioRate = $map['AudioRate'];
        }
        if (isset($map['AudioChannelNum'])) {
            $model->audioChannelNum = $map['AudioChannelNum'];
        }
        if (isset($map['Lazy'])) {
            $model->lazy = $map['Lazy'];
        }

        return $model;
    }
}

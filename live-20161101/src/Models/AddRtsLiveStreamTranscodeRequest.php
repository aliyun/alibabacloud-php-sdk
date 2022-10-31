<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddRtsLiveStreamTranscodeRequest extends Model
{
    /**
     * @var string
     */
    public $app;

    /**
     * @var int
     */
    public $audioBitrate;

    /**
     * @var int
     */
    public $audioChannelNum;

    /**
     * @var string
     */
    public $audioCodec;

    /**
     * @var string
     */
    public $audioProfile;

    /**
     * @var int
     */
    public $audioRate;

    /**
     * @var bool
     */
    public $deleteBframes;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $FPS;

    /**
     * @var string
     */
    public $gop;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $lazy;

    /**
     * @var bool
     */
    public $opus;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $profile;

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
    public $videoBitrate;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'app'             => 'App',
        'audioBitrate'    => 'AudioBitrate',
        'audioChannelNum' => 'AudioChannelNum',
        'audioCodec'      => 'AudioCodec',
        'audioProfile'    => 'AudioProfile',
        'audioRate'       => 'AudioRate',
        'deleteBframes'   => 'DeleteBframes',
        'domain'          => 'Domain',
        'FPS'             => 'FPS',
        'gop'             => 'Gop',
        'height'          => 'Height',
        'lazy'            => 'Lazy',
        'opus'            => 'Opus',
        'ownerId'         => 'OwnerId',
        'profile'         => 'Profile',
        'template'        => 'Template',
        'templateType'    => 'TemplateType',
        'videoBitrate'    => 'VideoBitrate',
        'width'           => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->audioBitrate) {
            $res['AudioBitrate'] = $this->audioBitrate;
        }
        if (null !== $this->audioChannelNum) {
            $res['AudioChannelNum'] = $this->audioChannelNum;
        }
        if (null !== $this->audioCodec) {
            $res['AudioCodec'] = $this->audioCodec;
        }
        if (null !== $this->audioProfile) {
            $res['AudioProfile'] = $this->audioProfile;
        }
        if (null !== $this->audioRate) {
            $res['AudioRate'] = $this->audioRate;
        }
        if (null !== $this->deleteBframes) {
            $res['DeleteBframes'] = $this->deleteBframes;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->FPS) {
            $res['FPS'] = $this->FPS;
        }
        if (null !== $this->gop) {
            $res['Gop'] = $this->gop;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->lazy) {
            $res['Lazy'] = $this->lazy;
        }
        if (null !== $this->opus) {
            $res['Opus'] = $this->opus;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->videoBitrate) {
            $res['VideoBitrate'] = $this->videoBitrate;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddRtsLiveStreamTranscodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['AudioBitrate'])) {
            $model->audioBitrate = $map['AudioBitrate'];
        }
        if (isset($map['AudioChannelNum'])) {
            $model->audioChannelNum = $map['AudioChannelNum'];
        }
        if (isset($map['AudioCodec'])) {
            $model->audioCodec = $map['AudioCodec'];
        }
        if (isset($map['AudioProfile'])) {
            $model->audioProfile = $map['AudioProfile'];
        }
        if (isset($map['AudioRate'])) {
            $model->audioRate = $map['AudioRate'];
        }
        if (isset($map['DeleteBframes'])) {
            $model->deleteBframes = $map['DeleteBframes'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['FPS'])) {
            $model->FPS = $map['FPS'];
        }
        if (isset($map['Gop'])) {
            $model->gop = $map['Gop'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Lazy'])) {
            $model->lazy = $map['Lazy'];
        }
        if (isset($map['Opus'])) {
            $model->opus = $map['Opus'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['VideoBitrate'])) {
            $model->videoBitrate = $map['VideoBitrate'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}

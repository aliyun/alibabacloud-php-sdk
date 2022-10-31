<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddCustomLiveStreamTranscodeRequest extends Model
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
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $encryptParameters;

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
    public $kmsKeyExpireInterval;

    /**
     * @var string
     */
    public $kmsKeyID;

    /**
     * @var string
     */
    public $kmsUID;

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
        'app'                  => 'App',
        'audioBitrate'         => 'AudioBitrate',
        'audioChannelNum'      => 'AudioChannelNum',
        'audioCodec'           => 'AudioCodec',
        'audioProfile'         => 'AudioProfile',
        'audioRate'            => 'AudioRate',
        'domain'               => 'Domain',
        'encryptParameters'    => 'EncryptParameters',
        'FPS'                  => 'FPS',
        'gop'                  => 'Gop',
        'height'               => 'Height',
        'kmsKeyExpireInterval' => 'KmsKeyExpireInterval',
        'kmsKeyID'             => 'KmsKeyID',
        'kmsUID'               => 'KmsUID',
        'ownerId'              => 'OwnerId',
        'profile'              => 'Profile',
        'template'             => 'Template',
        'templateType'         => 'TemplateType',
        'videoBitrate'         => 'VideoBitrate',
        'width'                => 'Width',
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
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->encryptParameters) {
            $res['EncryptParameters'] = $this->encryptParameters;
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
        if (null !== $this->kmsKeyExpireInterval) {
            $res['KmsKeyExpireInterval'] = $this->kmsKeyExpireInterval;
        }
        if (null !== $this->kmsKeyID) {
            $res['KmsKeyID'] = $this->kmsKeyID;
        }
        if (null !== $this->kmsUID) {
            $res['KmsUID'] = $this->kmsUID;
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
     * @return AddCustomLiveStreamTranscodeRequest
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['EncryptParameters'])) {
            $model->encryptParameters = $map['EncryptParameters'];
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
        if (isset($map['KmsKeyExpireInterval'])) {
            $model->kmsKeyExpireInterval = $map['KmsKeyExpireInterval'];
        }
        if (isset($map['KmsKeyID'])) {
            $model->kmsKeyID = $map['KmsKeyID'];
        }
        if (isset($map['KmsUID'])) {
            $model->kmsUID = $map['KmsUID'];
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoResponseBody\domainTranscodeList\domainTranscodeInfo;

use AlibabaCloud\Tea\Model;

class customTranscodeParameters extends Model
{
    /**
     * @var string
     */
    public $videoProfile;

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
    public $rtsFlag;

    /**
     * @var string
     */
    public $templateType;

    /**
     * @var string
     */
    public $bframes;

    /**
     * @var int
     */
    public $audioRate;

    /**
     * @var string
     */
    public $audioCodec;

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
    public $width;

    /**
     * @var int
     */
    public $videoBitrate;

    /**
     * @var int
     */
    public $audioChannelNum;

    /**
     * @var string
     */
    public $audioProfile;
    protected $_name = [
        'videoProfile'    => 'VideoProfile',
        'audioBitrate'    => 'AudioBitrate',
        'height'          => 'Height',
        'rtsFlag'         => 'RtsFlag',
        'templateType'    => 'TemplateType',
        'bframes'         => 'Bframes',
        'audioRate'       => 'AudioRate',
        'audioCodec'      => 'AudioCodec',
        'FPS'             => 'FPS',
        'gop'             => 'Gop',
        'width'           => 'Width',
        'videoBitrate'    => 'VideoBitrate',
        'audioChannelNum' => 'AudioChannelNum',
        'audioProfile'    => 'AudioProfile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoProfile) {
            $res['VideoProfile'] = $this->videoProfile;
        }
        if (null !== $this->audioBitrate) {
            $res['AudioBitrate'] = $this->audioBitrate;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->rtsFlag) {
            $res['RtsFlag'] = $this->rtsFlag;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->bframes) {
            $res['Bframes'] = $this->bframes;
        }
        if (null !== $this->audioRate) {
            $res['AudioRate'] = $this->audioRate;
        }
        if (null !== $this->audioCodec) {
            $res['AudioCodec'] = $this->audioCodec;
        }
        if (null !== $this->FPS) {
            $res['FPS'] = $this->FPS;
        }
        if (null !== $this->gop) {
            $res['Gop'] = $this->gop;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->videoBitrate) {
            $res['VideoBitrate'] = $this->videoBitrate;
        }
        if (null !== $this->audioChannelNum) {
            $res['AudioChannelNum'] = $this->audioChannelNum;
        }
        if (null !== $this->audioProfile) {
            $res['AudioProfile'] = $this->audioProfile;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customTranscodeParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoProfile'])) {
            $model->videoProfile = $map['VideoProfile'];
        }
        if (isset($map['AudioBitrate'])) {
            $model->audioBitrate = $map['AudioBitrate'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['RtsFlag'])) {
            $model->rtsFlag = $map['RtsFlag'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['Bframes'])) {
            $model->bframes = $map['Bframes'];
        }
        if (isset($map['AudioRate'])) {
            $model->audioRate = $map['AudioRate'];
        }
        if (isset($map['AudioCodec'])) {
            $model->audioCodec = $map['AudioCodec'];
        }
        if (isset($map['FPS'])) {
            $model->FPS = $map['FPS'];
        }
        if (isset($map['Gop'])) {
            $model->gop = $map['Gop'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['VideoBitrate'])) {
            $model->videoBitrate = $map['VideoBitrate'];
        }
        if (isset($map['AudioChannelNum'])) {
            $model->audioChannelNum = $map['AudioChannelNum'];
        }
        if (isset($map['AudioProfile'])) {
            $model->audioProfile = $map['AudioProfile'];
        }

        return $model;
    }
}

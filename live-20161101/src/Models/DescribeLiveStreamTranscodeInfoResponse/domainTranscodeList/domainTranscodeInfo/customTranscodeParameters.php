<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoResponse\domainTranscodeList\domainTranscodeInfo;

use AlibabaCloud\Tea\Model;

class customTranscodeParameters extends Model
{
    /**
     * @var string
     */
    public $rtsFlag;

    /**
     * @var string
     */
    public $bframes;

    /**
     * @var int
     */
    public $videoBitrate;

    /**
     * @var int
     */
    public $FPS;

    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $width;

    /**
     * @var string
     */
    public $templateType;

    /**
     * @var string
     */
    public $videoProfile;

    /**
     * @var string
     */
    public $gop;

    /**
     * @var int
     */
    public $audioBitrate;

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
    protected $_name = [
        'rtsFlag'         => 'RtsFlag',
        'bframes'         => 'Bframes',
        'videoBitrate'    => 'VideoBitrate',
        'FPS'             => 'FPS',
        'height'          => 'Height',
        'width'           => 'Width',
        'templateType'    => 'TemplateType',
        'videoProfile'    => 'VideoProfile',
        'gop'             => 'Gop',
        'audioBitrate'    => 'AudioBitrate',
        'audioProfile'    => 'AudioProfile',
        'audioCodec'      => 'AudioCodec',
        'audioRate'       => 'AudioRate',
        'audioChannelNum' => 'AudioChannelNum',
    ];

    public function validate()
    {
        Model::validateRequired('rtsFlag', $this->rtsFlag, true);
        Model::validateRequired('bframes', $this->bframes, true);
        Model::validateRequired('videoBitrate', $this->videoBitrate, true);
        Model::validateRequired('FPS', $this->FPS, true);
        Model::validateRequired('height', $this->height, true);
        Model::validateRequired('width', $this->width, true);
        Model::validateRequired('templateType', $this->templateType, true);
        Model::validateRequired('videoProfile', $this->videoProfile, true);
        Model::validateRequired('gop', $this->gop, true);
        Model::validateRequired('audioBitrate', $this->audioBitrate, true);
        Model::validateRequired('audioProfile', $this->audioProfile, true);
        Model::validateRequired('audioCodec', $this->audioCodec, true);
        Model::validateRequired('audioRate', $this->audioRate, true);
        Model::validateRequired('audioChannelNum', $this->audioChannelNum, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rtsFlag) {
            $res['RtsFlag'] = $this->rtsFlag;
        }
        if (null !== $this->bframes) {
            $res['Bframes'] = $this->bframes;
        }
        if (null !== $this->videoBitrate) {
            $res['VideoBitrate'] = $this->videoBitrate;
        }
        if (null !== $this->FPS) {
            $res['FPS'] = $this->FPS;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->videoProfile) {
            $res['VideoProfile'] = $this->videoProfile;
        }
        if (null !== $this->gop) {
            $res['Gop'] = $this->gop;
        }
        if (null !== $this->audioBitrate) {
            $res['AudioBitrate'] = $this->audioBitrate;
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
        if (isset($map['RtsFlag'])) {
            $model->rtsFlag = $map['RtsFlag'];
        }
        if (isset($map['Bframes'])) {
            $model->bframes = $map['Bframes'];
        }
        if (isset($map['VideoBitrate'])) {
            $model->videoBitrate = $map['VideoBitrate'];
        }
        if (isset($map['FPS'])) {
            $model->FPS = $map['FPS'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['VideoProfile'])) {
            $model->videoProfile = $map['VideoProfile'];
        }
        if (isset($map['Gop'])) {
            $model->gop = $map['Gop'];
        }
        if (isset($map['AudioBitrate'])) {
            $model->audioBitrate = $map['AudioBitrate'];
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

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamTranscodeInfoResponseBody\domainTranscodeList\domainTranscodeInfo;

use AlibabaCloud\Dara\Model;

class customTranscodeParameters extends Model
{
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
    public $bframes;

    /**
     * @var mixed[]
     */
    public $bitrateWithSource;

    /**
     * @var bool
     */
    public $deInterlaced;

    /**
     * @var mixed[]
     */
    public $extWithSource;

    /**
     * @var int
     */
    public $FPS;

    /**
     * @var mixed[]
     */
    public $fpsWithSource;

    /**
     * @var string
     */
    public $gop;

    /**
     * @var int
     */
    public $height;

    /**
     * @var mixed[]
     */
    public $resWithSource;

    /**
     * @var string
     */
    public $rtsFlag;

    /**
     * @var string
     */
    public $templateType;

    /**
     * @var int
     */
    public $videoBitrate;

    /**
     * @var string
     */
    public $videoProfile;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'audioBitrate' => 'AudioBitrate',
        'audioChannelNum' => 'AudioChannelNum',
        'audioCodec' => 'AudioCodec',
        'audioProfile' => 'AudioProfile',
        'audioRate' => 'AudioRate',
        'bframes' => 'Bframes',
        'bitrateWithSource' => 'BitrateWithSource',
        'deInterlaced' => 'DeInterlaced',
        'extWithSource' => 'ExtWithSource',
        'FPS' => 'FPS',
        'fpsWithSource' => 'FpsWithSource',
        'gop' => 'Gop',
        'height' => 'Height',
        'resWithSource' => 'ResWithSource',
        'rtsFlag' => 'RtsFlag',
        'templateType' => 'TemplateType',
        'videoBitrate' => 'VideoBitrate',
        'videoProfile' => 'VideoProfile',
        'width' => 'Width',
    ];

    public function validate()
    {
        if (\is_array($this->bitrateWithSource)) {
            Model::validateArray($this->bitrateWithSource);
        }
        if (\is_array($this->extWithSource)) {
            Model::validateArray($this->extWithSource);
        }
        if (\is_array($this->fpsWithSource)) {
            Model::validateArray($this->fpsWithSource);
        }
        if (\is_array($this->resWithSource)) {
            Model::validateArray($this->resWithSource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->bframes) {
            $res['Bframes'] = $this->bframes;
        }

        if (null !== $this->bitrateWithSource) {
            if (\is_array($this->bitrateWithSource)) {
                $res['BitrateWithSource'] = [];
                foreach ($this->bitrateWithSource as $key1 => $value1) {
                    $res['BitrateWithSource'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->deInterlaced) {
            $res['DeInterlaced'] = $this->deInterlaced;
        }

        if (null !== $this->extWithSource) {
            if (\is_array($this->extWithSource)) {
                $res['ExtWithSource'] = [];
                foreach ($this->extWithSource as $key1 => $value1) {
                    $res['ExtWithSource'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->FPS) {
            $res['FPS'] = $this->FPS;
        }

        if (null !== $this->fpsWithSource) {
            if (\is_array($this->fpsWithSource)) {
                $res['FpsWithSource'] = [];
                foreach ($this->fpsWithSource as $key1 => $value1) {
                    $res['FpsWithSource'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->gop) {
            $res['Gop'] = $this->gop;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->resWithSource) {
            if (\is_array($this->resWithSource)) {
                $res['ResWithSource'] = [];
                foreach ($this->resWithSource as $key1 => $value1) {
                    $res['ResWithSource'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->rtsFlag) {
            $res['RtsFlag'] = $this->rtsFlag;
        }

        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        if (null !== $this->videoBitrate) {
            $res['VideoBitrate'] = $this->videoBitrate;
        }

        if (null !== $this->videoProfile) {
            $res['VideoProfile'] = $this->videoProfile;
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

        if (isset($map['Bframes'])) {
            $model->bframes = $map['Bframes'];
        }

        if (isset($map['BitrateWithSource'])) {
            if (!empty($map['BitrateWithSource'])) {
                $model->bitrateWithSource = [];
                foreach ($map['BitrateWithSource'] as $key1 => $value1) {
                    $model->bitrateWithSource[$key1] = $value1;
                }
            }
        }

        if (isset($map['DeInterlaced'])) {
            $model->deInterlaced = $map['DeInterlaced'];
        }

        if (isset($map['ExtWithSource'])) {
            if (!empty($map['ExtWithSource'])) {
                $model->extWithSource = [];
                foreach ($map['ExtWithSource'] as $key1 => $value1) {
                    $model->extWithSource[$key1] = $value1;
                }
            }
        }

        if (isset($map['FPS'])) {
            $model->FPS = $map['FPS'];
        }

        if (isset($map['FpsWithSource'])) {
            if (!empty($map['FpsWithSource'])) {
                $model->fpsWithSource = [];
                foreach ($map['FpsWithSource'] as $key1 => $value1) {
                    $model->fpsWithSource[$key1] = $value1;
                }
            }
        }

        if (isset($map['Gop'])) {
            $model->gop = $map['Gop'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['ResWithSource'])) {
            if (!empty($map['ResWithSource'])) {
                $model->resWithSource = [];
                foreach ($map['ResWithSource'] as $key1 => $value1) {
                    $model->resWithSource[$key1] = $value1;
                }
            }
        }

        if (isset($map['RtsFlag'])) {
            $model->rtsFlag = $map['RtsFlag'];
        }

        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        if (isset($map['VideoBitrate'])) {
            $model->videoBitrate = $map['VideoBitrate'];
        }

        if (isset($map['VideoProfile'])) {
            $model->videoProfile = $map['VideoProfile'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}

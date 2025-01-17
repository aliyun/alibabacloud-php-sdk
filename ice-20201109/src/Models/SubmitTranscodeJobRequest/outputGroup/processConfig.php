<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest\outputGroup;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest\outputGroup\processConfig\combineConfigs;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest\outputGroup\processConfig\encryption;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest\outputGroup\processConfig\imageWatermarks;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest\outputGroup\processConfig\subtitles;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest\outputGroup\processConfig\textWatermarks;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest\outputGroup\processConfig\transcode;

class processConfig extends Model
{
    /**
     * @var combineConfigs[]
     */
    public $combineConfigs;
    /**
     * @var encryption
     */
    public $encryption;
    /**
     * @var imageWatermarks[]
     */
    public $imageWatermarks;
    /**
     * @var subtitles[]
     */
    public $subtitles;
    /**
     * @var textWatermarks[]
     */
    public $textWatermarks;
    /**
     * @var transcode
     */
    public $transcode;
    protected $_name = [
        'combineConfigs'  => 'CombineConfigs',
        'encryption'      => 'Encryption',
        'imageWatermarks' => 'ImageWatermarks',
        'subtitles'       => 'Subtitles',
        'textWatermarks'  => 'TextWatermarks',
        'transcode'       => 'Transcode',
    ];

    public function validate()
    {
        if (\is_array($this->combineConfigs)) {
            Model::validateArray($this->combineConfigs);
        }
        if (null !== $this->encryption) {
            $this->encryption->validate();
        }
        if (\is_array($this->imageWatermarks)) {
            Model::validateArray($this->imageWatermarks);
        }
        if (\is_array($this->subtitles)) {
            Model::validateArray($this->subtitles);
        }
        if (\is_array($this->textWatermarks)) {
            Model::validateArray($this->textWatermarks);
        }
        if (null !== $this->transcode) {
            $this->transcode->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->combineConfigs) {
            if (\is_array($this->combineConfigs)) {
                $res['CombineConfigs'] = [];
                $n1                    = 0;
                foreach ($this->combineConfigs as $item1) {
                    $res['CombineConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->encryption) {
            $res['Encryption'] = null !== $this->encryption ? $this->encryption->toArray($noStream) : $this->encryption;
        }

        if (null !== $this->imageWatermarks) {
            if (\is_array($this->imageWatermarks)) {
                $res['ImageWatermarks'] = [];
                $n1                     = 0;
                foreach ($this->imageWatermarks as $item1) {
                    $res['ImageWatermarks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->subtitles) {
            if (\is_array($this->subtitles)) {
                $res['Subtitles'] = [];
                $n1               = 0;
                foreach ($this->subtitles as $item1) {
                    $res['Subtitles'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->textWatermarks) {
            if (\is_array($this->textWatermarks)) {
                $res['TextWatermarks'] = [];
                $n1                    = 0;
                foreach ($this->textWatermarks as $item1) {
                    $res['TextWatermarks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->transcode) {
            $res['Transcode'] = null !== $this->transcode ? $this->transcode->toArray($noStream) : $this->transcode;
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
        if (isset($map['CombineConfigs'])) {
            if (!empty($map['CombineConfigs'])) {
                $model->combineConfigs = [];
                $n1                    = 0;
                foreach ($map['CombineConfigs'] as $item1) {
                    $model->combineConfigs[$n1++] = combineConfigs::fromMap($item1);
                }
            }
        }

        if (isset($map['Encryption'])) {
            $model->encryption = encryption::fromMap($map['Encryption']);
        }

        if (isset($map['ImageWatermarks'])) {
            if (!empty($map['ImageWatermarks'])) {
                $model->imageWatermarks = [];
                $n1                     = 0;
                foreach ($map['ImageWatermarks'] as $item1) {
                    $model->imageWatermarks[$n1++] = imageWatermarks::fromMap($item1);
                }
            }
        }

        if (isset($map['Subtitles'])) {
            if (!empty($map['Subtitles'])) {
                $model->subtitles = [];
                $n1               = 0;
                foreach ($map['Subtitles'] as $item1) {
                    $model->subtitles[$n1++] = subtitles::fromMap($item1);
                }
            }
        }

        if (isset($map['TextWatermarks'])) {
            if (!empty($map['TextWatermarks'])) {
                $model->textWatermarks = [];
                $n1                    = 0;
                foreach ($map['TextWatermarks'] as $item1) {
                    $model->textWatermarks[$n1++] = textWatermarks::fromMap($item1);
                }
            }
        }

        if (isset($map['Transcode'])) {
            $model->transcode = transcode::fromMap($map['Transcode']);
        }

        return $model;
    }
}

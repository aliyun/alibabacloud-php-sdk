<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\outputGroup;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig\combineConfigs;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig\encryption;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig\imageWatermarks;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig\subtitles;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig\textWatermarks;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig\transcode;
use AlibabaCloud\Tea\Model;

class processConfig extends Model
{
    /**
     * @description The multi-input stream merge configuration.
     *
     * @var combineConfigs[]
     */
    public $combineConfigs;

    /**
     * @description The encryption settings.
     *
     * @var encryption
     */
    public $encryption;

    /**
     * @description The watermark configuration of an image.
     *
     * @var imageWatermarks[]
     */
    public $imageWatermarks;

    /**
     * @description The subtitle configuration.
     *
     * @var subtitles[]
     */
    public $subtitles;

    /**
     * @description The configurations of the text watermark.
     *
     * @var textWatermarks[]
     */
    public $textWatermarks;

    /**
     * @description The transcoding configuration.
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->combineConfigs) {
            $res['CombineConfigs'] = [];
            if (null !== $this->combineConfigs && \is_array($this->combineConfigs)) {
                $n = 0;
                foreach ($this->combineConfigs as $item) {
                    $res['CombineConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->encryption) {
            $res['Encryption'] = null !== $this->encryption ? $this->encryption->toMap() : null;
        }
        if (null !== $this->imageWatermarks) {
            $res['ImageWatermarks'] = [];
            if (null !== $this->imageWatermarks && \is_array($this->imageWatermarks)) {
                $n = 0;
                foreach ($this->imageWatermarks as $item) {
                    $res['ImageWatermarks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->subtitles) {
            $res['Subtitles'] = [];
            if (null !== $this->subtitles && \is_array($this->subtitles)) {
                $n = 0;
                foreach ($this->subtitles as $item) {
                    $res['Subtitles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->textWatermarks) {
            $res['TextWatermarks'] = [];
            if (null !== $this->textWatermarks && \is_array($this->textWatermarks)) {
                $n = 0;
                foreach ($this->textWatermarks as $item) {
                    $res['TextWatermarks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->transcode) {
            $res['Transcode'] = null !== $this->transcode ? $this->transcode->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return processConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CombineConfigs'])) {
            if (!empty($map['CombineConfigs'])) {
                $model->combineConfigs = [];
                $n                     = 0;
                foreach ($map['CombineConfigs'] as $item) {
                    $model->combineConfigs[$n++] = null !== $item ? combineConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Encryption'])) {
            $model->encryption = encryption::fromMap($map['Encryption']);
        }
        if (isset($map['ImageWatermarks'])) {
            if (!empty($map['ImageWatermarks'])) {
                $model->imageWatermarks = [];
                $n                      = 0;
                foreach ($map['ImageWatermarks'] as $item) {
                    $model->imageWatermarks[$n++] = null !== $item ? imageWatermarks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Subtitles'])) {
            if (!empty($map['Subtitles'])) {
                $model->subtitles = [];
                $n                = 0;
                foreach ($map['Subtitles'] as $item) {
                    $model->subtitles[$n++] = null !== $item ? subtitles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TextWatermarks'])) {
            if (!empty($map['TextWatermarks'])) {
                $model->textWatermarks = [];
                $n                     = 0;
                foreach ($map['TextWatermarks'] as $item) {
                    $model->textWatermarks[$n++] = null !== $item ? textWatermarks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Transcode'])) {
            $model->transcode = transcode::fromMap($map['Transcode']);
        }

        return $model;
    }
}

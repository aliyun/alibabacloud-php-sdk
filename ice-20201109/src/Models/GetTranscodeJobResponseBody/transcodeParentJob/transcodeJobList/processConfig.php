<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\transcodeJobList;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\processConfig\imageWatermarks;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\processConfig\subtitles;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\processConfig\textWatermarks;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\processConfig\transcode;
use AlibabaCloud\Tea\Model;

class processConfig extends Model
{
    /**
     * @description 图片水印配置
     *
     * @var imageWatermarks[]
     */
    public $imageWatermarks;

    /**
     * @description 字幕压制配置
     *
     * @var subtitles[]
     */
    public $subtitles;

    /**
     * @description 文字水印配置
     *
     * @var textWatermarks[]
     */
    public $textWatermarks;

    /**
     * @description 转码配置
     *
     * @var transcode
     */
    public $transcode;
    protected $_name = [
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

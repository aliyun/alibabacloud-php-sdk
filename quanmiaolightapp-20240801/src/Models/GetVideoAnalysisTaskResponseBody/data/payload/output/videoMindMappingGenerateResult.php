<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoMindMappingGenerateResult\usage;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoMindMappingGenerateResult\videoMindMappings;
use AlibabaCloud\Tea\Model;

class videoMindMappingGenerateResult extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $generateFinished;

    /**
     * @var string
     */
    public $text;

    /**
     * @var usage
     */
    public $usage;

    /**
     * @var videoMindMappings[]
     */
    public $videoMindMappings;
    protected $_name = [
        'generateFinished'  => 'generateFinished',
        'text'              => 'text',
        'usage'             => 'usage',
        'videoMindMappings' => 'videoMindMappings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->generateFinished) {
            $res['generateFinished'] = $this->generateFinished;
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }
        if (null !== $this->usage) {
            $res['usage'] = null !== $this->usage ? $this->usage->toMap() : null;
        }
        if (null !== $this->videoMindMappings) {
            $res['videoMindMappings'] = [];
            if (null !== $this->videoMindMappings && \is_array($this->videoMindMappings)) {
                $n = 0;
                foreach ($this->videoMindMappings as $item) {
                    $res['videoMindMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoMindMappingGenerateResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['generateFinished'])) {
            $model->generateFinished = $map['generateFinished'];
        }
        if (isset($map['text'])) {
            $model->text = $map['text'];
        }
        if (isset($map['usage'])) {
            $model->usage = usage::fromMap($map['usage']);
        }
        if (isset($map['videoMindMappings'])) {
            if (!empty($map['videoMindMappings'])) {
                $model->videoMindMappings = [];
                $n                        = 0;
                foreach ($map['videoMindMappings'] as $item) {
                    $model->videoMindMappings[$n++] = null !== $item ? videoMindMappings::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\output;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\output\videoAnalysisResult\usage;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\output\videoAnalysisResult\videoShotAnalysisResults;
use AlibabaCloud\Tea\Model;

class videoAnalysisResult extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $generateFinished;

    /**
     * @example qwen-vl-max
     *
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $text;

    /**
     * @var usage
     */
    public $usage;

    /**
     * @var videoShotAnalysisResults[]
     */
    public $videoShotAnalysisResults;
    protected $_name = [
        'generateFinished'         => 'generateFinished',
        'modelId'                  => 'modelId',
        'text'                     => 'text',
        'usage'                    => 'usage',
        'videoShotAnalysisResults' => 'videoShotAnalysisResults',
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
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }
        if (null !== $this->usage) {
            $res['usage'] = null !== $this->usage ? $this->usage->toMap() : null;
        }
        if (null !== $this->videoShotAnalysisResults) {
            $res['videoShotAnalysisResults'] = [];
            if (null !== $this->videoShotAnalysisResults && \is_array($this->videoShotAnalysisResults)) {
                $n = 0;
                foreach ($this->videoShotAnalysisResults as $item) {
                    $res['videoShotAnalysisResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoAnalysisResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['generateFinished'])) {
            $model->generateFinished = $map['generateFinished'];
        }
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }
        if (isset($map['text'])) {
            $model->text = $map['text'];
        }
        if (isset($map['usage'])) {
            $model->usage = usage::fromMap($map['usage']);
        }
        if (isset($map['videoShotAnalysisResults'])) {
            if (!empty($map['videoShotAnalysisResults'])) {
                $model->videoShotAnalysisResults = [];
                $n                               = 0;
                foreach ($map['videoShotAnalysisResults'] as $item) {
                    $model->videoShotAnalysisResults[$n++] = null !== $item ? videoShotAnalysisResults::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

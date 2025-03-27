<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoAnalysisResult\usage;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoAnalysisResult\videoShotAnalysisResults;

class videoAnalysisResult extends Model
{
    /**
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
     * @var videoShotAnalysisResults[]
     */
    public $videoShotAnalysisResults;
    protected $_name = [
        'generateFinished' => 'generateFinished',
        'text' => 'text',
        'usage' => 'usage',
        'videoShotAnalysisResults' => 'videoShotAnalysisResults',
    ];

    public function validate()
    {
        if (null !== $this->usage) {
            $this->usage->validate();
        }
        if (\is_array($this->videoShotAnalysisResults)) {
            Model::validateArray($this->videoShotAnalysisResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->generateFinished) {
            $res['generateFinished'] = $this->generateFinished;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        if (null !== $this->usage) {
            $res['usage'] = null !== $this->usage ? $this->usage->toArray($noStream) : $this->usage;
        }

        if (null !== $this->videoShotAnalysisResults) {
            if (\is_array($this->videoShotAnalysisResults)) {
                $res['videoShotAnalysisResults'] = [];
                $n1 = 0;
                foreach ($this->videoShotAnalysisResults as $item1) {
                    $res['videoShotAnalysisResults'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['generateFinished'])) {
            $model->generateFinished = $map['generateFinished'];
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
                $n1 = 0;
                foreach ($map['videoShotAnalysisResults'] as $item1) {
                    $model->videoShotAnalysisResults[$n1++] = videoShotAnalysisResults::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

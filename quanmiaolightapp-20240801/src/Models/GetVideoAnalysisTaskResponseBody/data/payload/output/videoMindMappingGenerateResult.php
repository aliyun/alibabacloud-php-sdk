<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoMindMappingGenerateResult\usage;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoMindMappingGenerateResult\videoMindMappings;

class videoMindMappingGenerateResult extends Model
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
        if (null !== $this->usage) {
            $this->usage->validate();
        }
        if (\is_array($this->videoMindMappings)) {
            Model::validateArray($this->videoMindMappings);
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

        if (null !== $this->videoMindMappings) {
            if (\is_array($this->videoMindMappings)) {
                $res['videoMindMappings'] = [];
                $n1                       = 0;
                foreach ($this->videoMindMappings as $item1) {
                    $res['videoMindMappings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['videoMindMappings'])) {
            if (!empty($map['videoMindMappings'])) {
                $model->videoMindMappings = [];
                $n1                       = 0;
                foreach ($map['videoMindMappings'] as $item1) {
                    $model->videoMindMappings[$n1++] = videoMindMappings::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

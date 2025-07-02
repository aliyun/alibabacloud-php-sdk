<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\output\videoAnalysisResult;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\output\videoCaptionResult;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\output\videoGenerateResult;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\output\videoGenerateResults;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\output\videoMindMappingGenerateResult;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\output\videoShotSnapshotResult;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\output\videoTitleGenerateResult;

class output extends Model
{
    /**
     * @var string
     */
    public $resultJsonFileUrl;

    /**
     * @var videoAnalysisResult
     */
    public $videoAnalysisResult;

    /**
     * @var videoCaptionResult
     */
    public $videoCaptionResult;

    /**
     * @var videoGenerateResult
     */
    public $videoGenerateResult;

    /**
     * @var videoGenerateResults[]
     */
    public $videoGenerateResults;

    /**
     * @var videoMindMappingGenerateResult
     */
    public $videoMindMappingGenerateResult;

    /**
     * @var videoShotSnapshotResult
     */
    public $videoShotSnapshotResult;

    /**
     * @var videoTitleGenerateResult
     */
    public $videoTitleGenerateResult;
    protected $_name = [
        'resultJsonFileUrl' => 'resultJsonFileUrl',
        'videoAnalysisResult' => 'videoAnalysisResult',
        'videoCaptionResult' => 'videoCaptionResult',
        'videoGenerateResult' => 'videoGenerateResult',
        'videoGenerateResults' => 'videoGenerateResults',
        'videoMindMappingGenerateResult' => 'videoMindMappingGenerateResult',
        'videoShotSnapshotResult' => 'videoShotSnapshotResult',
        'videoTitleGenerateResult' => 'videoTitleGenerateResult',
    ];

    public function validate()
    {
        if (null !== $this->videoAnalysisResult) {
            $this->videoAnalysisResult->validate();
        }
        if (null !== $this->videoCaptionResult) {
            $this->videoCaptionResult->validate();
        }
        if (null !== $this->videoGenerateResult) {
            $this->videoGenerateResult->validate();
        }
        if (\is_array($this->videoGenerateResults)) {
            Model::validateArray($this->videoGenerateResults);
        }
        if (null !== $this->videoMindMappingGenerateResult) {
            $this->videoMindMappingGenerateResult->validate();
        }
        if (null !== $this->videoShotSnapshotResult) {
            $this->videoShotSnapshotResult->validate();
        }
        if (null !== $this->videoTitleGenerateResult) {
            $this->videoTitleGenerateResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resultJsonFileUrl) {
            $res['resultJsonFileUrl'] = $this->resultJsonFileUrl;
        }

        if (null !== $this->videoAnalysisResult) {
            $res['videoAnalysisResult'] = null !== $this->videoAnalysisResult ? $this->videoAnalysisResult->toArray($noStream) : $this->videoAnalysisResult;
        }

        if (null !== $this->videoCaptionResult) {
            $res['videoCaptionResult'] = null !== $this->videoCaptionResult ? $this->videoCaptionResult->toArray($noStream) : $this->videoCaptionResult;
        }

        if (null !== $this->videoGenerateResult) {
            $res['videoGenerateResult'] = null !== $this->videoGenerateResult ? $this->videoGenerateResult->toArray($noStream) : $this->videoGenerateResult;
        }

        if (null !== $this->videoGenerateResults) {
            if (\is_array($this->videoGenerateResults)) {
                $res['videoGenerateResults'] = [];
                $n1 = 0;
                foreach ($this->videoGenerateResults as $item1) {
                    $res['videoGenerateResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->videoMindMappingGenerateResult) {
            $res['videoMindMappingGenerateResult'] = null !== $this->videoMindMappingGenerateResult ? $this->videoMindMappingGenerateResult->toArray($noStream) : $this->videoMindMappingGenerateResult;
        }

        if (null !== $this->videoShotSnapshotResult) {
            $res['videoShotSnapshotResult'] = null !== $this->videoShotSnapshotResult ? $this->videoShotSnapshotResult->toArray($noStream) : $this->videoShotSnapshotResult;
        }

        if (null !== $this->videoTitleGenerateResult) {
            $res['videoTitleGenerateResult'] = null !== $this->videoTitleGenerateResult ? $this->videoTitleGenerateResult->toArray($noStream) : $this->videoTitleGenerateResult;
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
        if (isset($map['resultJsonFileUrl'])) {
            $model->resultJsonFileUrl = $map['resultJsonFileUrl'];
        }

        if (isset($map['videoAnalysisResult'])) {
            $model->videoAnalysisResult = videoAnalysisResult::fromMap($map['videoAnalysisResult']);
        }

        if (isset($map['videoCaptionResult'])) {
            $model->videoCaptionResult = videoCaptionResult::fromMap($map['videoCaptionResult']);
        }

        if (isset($map['videoGenerateResult'])) {
            $model->videoGenerateResult = videoGenerateResult::fromMap($map['videoGenerateResult']);
        }

        if (isset($map['videoGenerateResults'])) {
            if (!empty($map['videoGenerateResults'])) {
                $model->videoGenerateResults = [];
                $n1 = 0;
                foreach ($map['videoGenerateResults'] as $item1) {
                    $model->videoGenerateResults[$n1] = videoGenerateResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['videoMindMappingGenerateResult'])) {
            $model->videoMindMappingGenerateResult = videoMindMappingGenerateResult::fromMap($map['videoMindMappingGenerateResult']);
        }

        if (isset($map['videoShotSnapshotResult'])) {
            $model->videoShotSnapshotResult = videoShotSnapshotResult::fromMap($map['videoShotSnapshotResult']);
        }

        if (isset($map['videoTitleGenerateResult'])) {
            $model->videoTitleGenerateResult = videoTitleGenerateResult::fromMap($map['videoTitleGenerateResult']);
        }

        return $model;
    }
}

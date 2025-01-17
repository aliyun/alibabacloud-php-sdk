<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoAnalysisResult;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoCaptionResult;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoGenerateResult;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoMindMappingGenerateResult;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoTitleGenerateResult;

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
     * @var videoMindMappingGenerateResult
     */
    public $videoMindMappingGenerateResult;
    /**
     * @var videoTitleGenerateResult
     */
    public $videoTitleGenerateResult;
    protected $_name = [
        'resultJsonFileUrl'              => 'resultJsonFileUrl',
        'videoAnalysisResult'            => 'videoAnalysisResult',
        'videoCaptionResult'             => 'videoCaptionResult',
        'videoGenerateResult'            => 'videoGenerateResult',
        'videoMindMappingGenerateResult' => 'videoMindMappingGenerateResult',
        'videoTitleGenerateResult'       => 'videoTitleGenerateResult',
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
        if (null !== $this->videoMindMappingGenerateResult) {
            $this->videoMindMappingGenerateResult->validate();
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

        if (null !== $this->videoMindMappingGenerateResult) {
            $res['videoMindMappingGenerateResult'] = null !== $this->videoMindMappingGenerateResult ? $this->videoMindMappingGenerateResult->toArray($noStream) : $this->videoMindMappingGenerateResult;
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

        if (isset($map['videoMindMappingGenerateResult'])) {
            $model->videoMindMappingGenerateResult = videoMindMappingGenerateResult::fromMap($map['videoMindMappingGenerateResult']);
        }

        if (isset($map['videoTitleGenerateResult'])) {
            $model->videoTitleGenerateResult = videoTitleGenerateResult::fromMap($map['videoTitleGenerateResult']);
        }

        return $model;
    }
}

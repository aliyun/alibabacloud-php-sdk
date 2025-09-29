<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\audioSearchResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\clusterTopicResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\excerptResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\imageSearchResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\newsElementResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\textGenerateResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\textSearchResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\timelineResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\videoSearchResult;

class generatedContent extends Model
{
    /**
     * @var audioSearchResult
     */
    public $audioSearchResult;

    /**
     * @var clusterTopicResult
     */
    public $clusterTopicResult;

    /**
     * @var excerptResult
     */
    public $excerptResult;

    /**
     * @var imageSearchResult
     */
    public $imageSearchResult;

    /**
     * @var newsElementResult
     */
    public $newsElementResult;

    /**
     * @var textGenerateResult
     */
    public $textGenerateResult;

    /**
     * @var textSearchResult
     */
    public $textSearchResult;

    /**
     * @var timelineResult
     */
    public $timelineResult;

    /**
     * @var videoSearchResult
     */
    public $videoSearchResult;
    protected $_name = [
        'audioSearchResult' => 'AudioSearchResult',
        'clusterTopicResult' => 'ClusterTopicResult',
        'excerptResult' => 'ExcerptResult',
        'imageSearchResult' => 'ImageSearchResult',
        'newsElementResult' => 'NewsElementResult',
        'textGenerateResult' => 'TextGenerateResult',
        'textSearchResult' => 'TextSearchResult',
        'timelineResult' => 'TimelineResult',
        'videoSearchResult' => 'VideoSearchResult',
    ];

    public function validate()
    {
        if (null !== $this->audioSearchResult) {
            $this->audioSearchResult->validate();
        }
        if (null !== $this->clusterTopicResult) {
            $this->clusterTopicResult->validate();
        }
        if (null !== $this->excerptResult) {
            $this->excerptResult->validate();
        }
        if (null !== $this->imageSearchResult) {
            $this->imageSearchResult->validate();
        }
        if (null !== $this->newsElementResult) {
            $this->newsElementResult->validate();
        }
        if (null !== $this->textGenerateResult) {
            $this->textGenerateResult->validate();
        }
        if (null !== $this->textSearchResult) {
            $this->textSearchResult->validate();
        }
        if (null !== $this->timelineResult) {
            $this->timelineResult->validate();
        }
        if (null !== $this->videoSearchResult) {
            $this->videoSearchResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioSearchResult) {
            $res['AudioSearchResult'] = null !== $this->audioSearchResult ? $this->audioSearchResult->toArray($noStream) : $this->audioSearchResult;
        }

        if (null !== $this->clusterTopicResult) {
            $res['ClusterTopicResult'] = null !== $this->clusterTopicResult ? $this->clusterTopicResult->toArray($noStream) : $this->clusterTopicResult;
        }

        if (null !== $this->excerptResult) {
            $res['ExcerptResult'] = null !== $this->excerptResult ? $this->excerptResult->toArray($noStream) : $this->excerptResult;
        }

        if (null !== $this->imageSearchResult) {
            $res['ImageSearchResult'] = null !== $this->imageSearchResult ? $this->imageSearchResult->toArray($noStream) : $this->imageSearchResult;
        }

        if (null !== $this->newsElementResult) {
            $res['NewsElementResult'] = null !== $this->newsElementResult ? $this->newsElementResult->toArray($noStream) : $this->newsElementResult;
        }

        if (null !== $this->textGenerateResult) {
            $res['TextGenerateResult'] = null !== $this->textGenerateResult ? $this->textGenerateResult->toArray($noStream) : $this->textGenerateResult;
        }

        if (null !== $this->textSearchResult) {
            $res['TextSearchResult'] = null !== $this->textSearchResult ? $this->textSearchResult->toArray($noStream) : $this->textSearchResult;
        }

        if (null !== $this->timelineResult) {
            $res['TimelineResult'] = null !== $this->timelineResult ? $this->timelineResult->toArray($noStream) : $this->timelineResult;
        }

        if (null !== $this->videoSearchResult) {
            $res['VideoSearchResult'] = null !== $this->videoSearchResult ? $this->videoSearchResult->toArray($noStream) : $this->videoSearchResult;
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
        if (isset($map['AudioSearchResult'])) {
            $model->audioSearchResult = audioSearchResult::fromMap($map['AudioSearchResult']);
        }

        if (isset($map['ClusterTopicResult'])) {
            $model->clusterTopicResult = clusterTopicResult::fromMap($map['ClusterTopicResult']);
        }

        if (isset($map['ExcerptResult'])) {
            $model->excerptResult = excerptResult::fromMap($map['ExcerptResult']);
        }

        if (isset($map['ImageSearchResult'])) {
            $model->imageSearchResult = imageSearchResult::fromMap($map['ImageSearchResult']);
        }

        if (isset($map['NewsElementResult'])) {
            $model->newsElementResult = newsElementResult::fromMap($map['NewsElementResult']);
        }

        if (isset($map['TextGenerateResult'])) {
            $model->textGenerateResult = textGenerateResult::fromMap($map['TextGenerateResult']);
        }

        if (isset($map['TextSearchResult'])) {
            $model->textSearchResult = textSearchResult::fromMap($map['TextSearchResult']);
        }

        if (isset($map['TimelineResult'])) {
            $model->timelineResult = timelineResult::fromMap($map['TimelineResult']);
        }

        if (isset($map['VideoSearchResult'])) {
            $model->videoSearchResult = videoSearchResult::fromMap($map['VideoSearchResult']);
        }

        return $model;
    }
}

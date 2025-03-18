<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\clusterTopicResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\excerptResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\imageSearchResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\newsElementResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\textGenerateResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\timelineResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\videoSearchResult;
use AlibabaCloud\Tea\Model;

class generatedContent extends Model
{
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
     * @var timelineResult
     */
    public $timelineResult;

    /**
     * @var videoSearchResult
     */
    public $videoSearchResult;
    protected $_name = [
        'clusterTopicResult' => 'ClusterTopicResult',
        'excerptResult' => 'ExcerptResult',
        'imageSearchResult' => 'ImageSearchResult',
        'newsElementResult' => 'NewsElementResult',
        'textGenerateResult' => 'TextGenerateResult',
        'timelineResult' => 'TimelineResult',
        'videoSearchResult' => 'VideoSearchResult',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterTopicResult) {
            $res['ClusterTopicResult'] = null !== $this->clusterTopicResult ? $this->clusterTopicResult->toMap() : null;
        }
        if (null !== $this->excerptResult) {
            $res['ExcerptResult'] = null !== $this->excerptResult ? $this->excerptResult->toMap() : null;
        }
        if (null !== $this->imageSearchResult) {
            $res['ImageSearchResult'] = null !== $this->imageSearchResult ? $this->imageSearchResult->toMap() : null;
        }
        if (null !== $this->newsElementResult) {
            $res['NewsElementResult'] = null !== $this->newsElementResult ? $this->newsElementResult->toMap() : null;
        }
        if (null !== $this->textGenerateResult) {
            $res['TextGenerateResult'] = null !== $this->textGenerateResult ? $this->textGenerateResult->toMap() : null;
        }
        if (null !== $this->timelineResult) {
            $res['TimelineResult'] = null !== $this->timelineResult ? $this->timelineResult->toMap() : null;
        }
        if (null !== $this->videoSearchResult) {
            $res['VideoSearchResult'] = null !== $this->videoSearchResult ? $this->videoSearchResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return generatedContent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['TimelineResult'])) {
            $model->timelineResult = timelineResult::fromMap($map['TimelineResult']);
        }
        if (isset($map['VideoSearchResult'])) {
            $model->videoSearchResult = videoSearchResult::fromMap($map['VideoSearchResult']);
        }

        return $model;
    }
}

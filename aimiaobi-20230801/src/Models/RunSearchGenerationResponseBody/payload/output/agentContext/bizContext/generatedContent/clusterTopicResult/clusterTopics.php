<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\clusterTopicResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\clusterTopicResult\clusterTopics\imageSearchResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\clusterTopicResult\clusterTopics\textSearchResult;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\clusterTopicResult\clusterTopics\videoSearchResult;

class clusterTopics extends Model
{
    /**
     * @var imageSearchResult
     */
    public $imageSearchResult;
    /**
     * @var textSearchResult
     */
    public $textSearchResult;
    /**
     * @var string
     */
    public $topic;
    /**
     * @var videoSearchResult
     */
    public $videoSearchResult;
    protected $_name = [
        'imageSearchResult' => 'ImageSearchResult',
        'textSearchResult'  => 'TextSearchResult',
        'topic'             => 'Topic',
        'videoSearchResult' => 'VideoSearchResult',
    ];

    public function validate()
    {
        if (null !== $this->imageSearchResult) {
            $this->imageSearchResult->validate();
        }
        if (null !== $this->textSearchResult) {
            $this->textSearchResult->validate();
        }
        if (null !== $this->videoSearchResult) {
            $this->videoSearchResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageSearchResult) {
            $res['ImageSearchResult'] = null !== $this->imageSearchResult ? $this->imageSearchResult->toArray($noStream) : $this->imageSearchResult;
        }

        if (null !== $this->textSearchResult) {
            $res['TextSearchResult'] = null !== $this->textSearchResult ? $this->textSearchResult->toArray($noStream) : $this->textSearchResult;
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
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
        if (isset($map['ImageSearchResult'])) {
            $model->imageSearchResult = imageSearchResult::fromMap($map['ImageSearchResult']);
        }

        if (isset($map['TextSearchResult'])) {
            $model->textSearchResult = textSearchResult::fromMap($map['TextSearchResult']);
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        if (isset($map['VideoSearchResult'])) {
            $model->videoSearchResult = videoSearchResult::fromMap($map['VideoSearchResult']);
        }

        return $model;
    }
}

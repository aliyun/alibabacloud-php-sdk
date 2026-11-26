<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetKnowledgeBaseSmartIndexConfigurationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetKnowledgeBaseSmartIndexConfigurationResponseBody\artifacts\knowledgeInsights;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetKnowledgeBaseSmartIndexConfigurationResponseBody\artifacts\topicCards;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetKnowledgeBaseSmartIndexConfigurationResponseBody\artifacts\topicGraph;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetKnowledgeBaseSmartIndexConfigurationResponseBody\artifacts\topicOverview;

class artifacts extends Model
{
    /**
     * @var knowledgeInsights
     */
    public $knowledgeInsights;

    /**
     * @var topicCards
     */
    public $topicCards;

    /**
     * @var topicGraph
     */
    public $topicGraph;

    /**
     * @var topicOverview
     */
    public $topicOverview;
    protected $_name = [
        'knowledgeInsights' => 'knowledgeInsights',
        'topicCards' => 'topicCards',
        'topicGraph' => 'topicGraph',
        'topicOverview' => 'topicOverview',
    ];

    public function validate()
    {
        if (null !== $this->knowledgeInsights) {
            $this->knowledgeInsights->validate();
        }
        if (null !== $this->topicCards) {
            $this->topicCards->validate();
        }
        if (null !== $this->topicGraph) {
            $this->topicGraph->validate();
        }
        if (null !== $this->topicOverview) {
            $this->topicOverview->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->knowledgeInsights) {
            $res['knowledgeInsights'] = null !== $this->knowledgeInsights ? $this->knowledgeInsights->toArray($noStream) : $this->knowledgeInsights;
        }

        if (null !== $this->topicCards) {
            $res['topicCards'] = null !== $this->topicCards ? $this->topicCards->toArray($noStream) : $this->topicCards;
        }

        if (null !== $this->topicGraph) {
            $res['topicGraph'] = null !== $this->topicGraph ? $this->topicGraph->toArray($noStream) : $this->topicGraph;
        }

        if (null !== $this->topicOverview) {
            $res['topicOverview'] = null !== $this->topicOverview ? $this->topicOverview->toArray($noStream) : $this->topicOverview;
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
        if (isset($map['knowledgeInsights'])) {
            $model->knowledgeInsights = knowledgeInsights::fromMap($map['knowledgeInsights']);
        }

        if (isset($map['topicCards'])) {
            $model->topicCards = topicCards::fromMap($map['topicCards']);
        }

        if (isset($map['topicGraph'])) {
            $model->topicGraph = topicGraph::fromMap($map['topicGraph']);
        }

        if (isset($map['topicOverview'])) {
            $model->topicOverview = topicOverview::fromMap($map['topicOverview']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class SubmitDocClusterTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;
    /**
     * @var string
     */
    public $documentsShrink;
    /**
     * @var int
     */
    public $summaryLength;
    /**
     * @var int
     */
    public $titleLength;
    /**
     * @var int
     */
    public $topicCount;
    protected $_name = [
        'agentKey'        => 'AgentKey',
        'documentsShrink' => 'Documents',
        'summaryLength'   => 'SummaryLength',
        'titleLength'     => 'TitleLength',
        'topicCount'      => 'TopicCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->documentsShrink) {
            $res['Documents'] = $this->documentsShrink;
        }

        if (null !== $this->summaryLength) {
            $res['SummaryLength'] = $this->summaryLength;
        }

        if (null !== $this->titleLength) {
            $res['TitleLength'] = $this->titleLength;
        }

        if (null !== $this->topicCount) {
            $res['TopicCount'] = $this->topicCount;
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
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['Documents'])) {
            $model->documentsShrink = $map['Documents'];
        }

        if (isset($map['SummaryLength'])) {
            $model->summaryLength = $map['SummaryLength'];
        }

        if (isset($map['TitleLength'])) {
            $model->titleLength = $map['TitleLength'];
        }

        if (isset($map['TopicCount'])) {
            $model->topicCount = $map['TopicCount'];
        }

        return $model;
    }
}

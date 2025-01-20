<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastResponseBody\data;

use AlibabaCloud\Dara\Model;

class totalTokenInfo extends Model
{
    /**
     * @var int
     */
    public $hotTopicCount;
    /**
     * @var int
     */
    public $inputTokens;
    /**
     * @var int
     */
    public $outputTokens;
    /**
     * @var int
     */
    public $wordCount;
    protected $_name = [
        'hotTopicCount' => 'HotTopicCount',
        'inputTokens'   => 'InputTokens',
        'outputTokens'  => 'OutputTokens',
        'wordCount'     => 'WordCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotTopicCount) {
            $res['HotTopicCount'] = $this->hotTopicCount;
        }

        if (null !== $this->inputTokens) {
            $res['InputTokens'] = $this->inputTokens;
        }

        if (null !== $this->outputTokens) {
            $res['OutputTokens'] = $this->outputTokens;
        }

        if (null !== $this->wordCount) {
            $res['WordCount'] = $this->wordCount;
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
        if (isset($map['HotTopicCount'])) {
            $model->hotTopicCount = $map['HotTopicCount'];
        }

        if (isset($map['InputTokens'])) {
            $model->inputTokens = $map['InputTokens'];
        }

        if (isset($map['OutputTokens'])) {
            $model->outputTokens = $map['OutputTokens'];
        }

        if (isset($map['WordCount'])) {
            $model->wordCount = $map['WordCount'];
        }

        return $model;
    }
}

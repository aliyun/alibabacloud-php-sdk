<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastResponseBody\data;

use AlibabaCloud\Tea\Model;

class totalTokenInfo extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $hotTopicCount;

    /**
     * @example 100
     *
     * @var int
     */
    public $inputTokens;

    /**
     * @example 100
     *
     * @var int
     */
    public $outputTokens;

    /**
     * @example 100
     *
     * @var int
     */
    public $wordCount;
    protected $_name = [
        'hotTopicCount' => 'HotTopicCount',
        'inputTokens' => 'InputTokens',
        'outputTokens' => 'OutputTokens',
        'wordCount' => 'WordCount',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return totalTokenInfo
     */
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

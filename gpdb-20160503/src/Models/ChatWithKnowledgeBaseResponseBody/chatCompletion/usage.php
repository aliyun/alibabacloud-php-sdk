<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseResponseBody\chatCompletion;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ChatWithKnowledgeBaseResponseBody\chatCompletion\usage\promptTokensDetails;

class usage extends Model
{
    /**
     * @var int
     */
    public $completionTokens;

    /**
     * @var int
     */
    public $promptTokens;

    /**
     * @var promptTokensDetails
     */
    public $promptTokensDetails;

    /**
     * @var int
     */
    public $totalTokens;
    protected $_name = [
        'completionTokens' => 'CompletionTokens',
        'promptTokens' => 'PromptTokens',
        'promptTokensDetails' => 'PromptTokensDetails',
        'totalTokens' => 'TotalTokens',
    ];

    public function validate()
    {
        if (null !== $this->promptTokensDetails) {
            $this->promptTokensDetails->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completionTokens) {
            $res['CompletionTokens'] = $this->completionTokens;
        }

        if (null !== $this->promptTokens) {
            $res['PromptTokens'] = $this->promptTokens;
        }

        if (null !== $this->promptTokensDetails) {
            $res['PromptTokensDetails'] = null !== $this->promptTokensDetails ? $this->promptTokensDetails->toArray($noStream) : $this->promptTokensDetails;
        }

        if (null !== $this->totalTokens) {
            $res['TotalTokens'] = $this->totalTokens;
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
        if (isset($map['CompletionTokens'])) {
            $model->completionTokens = $map['CompletionTokens'];
        }

        if (isset($map['PromptTokens'])) {
            $model->promptTokens = $map['PromptTokens'];
        }

        if (isset($map['PromptTokensDetails'])) {
            $model->promptTokensDetails = promptTokensDetails::fromMap($map['PromptTokensDetails']);
        }

        if (isset($map['TotalTokens'])) {
            $model->totalTokens = $map['TotalTokens'];
        }

        return $model;
    }
}

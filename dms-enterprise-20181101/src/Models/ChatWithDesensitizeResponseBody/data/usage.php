<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ChatWithDesensitizeResponseBody\data;

use AlibabaCloud\Dara\Model;

class usage extends Model
{
    /**
     * @var string
     */
    public $completionTokens;

    /**
     * @var string
     */
    public $promptTokens;

    /**
     * @var string
     */
    public $totalTokens;
    protected $_name = [
        'completionTokens' => 'CompletionTokens',
        'promptTokens' => 'PromptTokens',
        'totalTokens' => 'TotalTokens',
    ];

    public function validate()
    {
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

        if (isset($map['TotalTokens'])) {
            $model->totalTokens = $map['TotalTokens'];
        }

        return $model;
    }
}

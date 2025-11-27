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
     * @var string[]
     */
    public $completionTokensDetails;

    /**
     * @var string
     */
    public $promptTokens;

    /**
     * @var string[]
     */
    public $promptTokensDetails;

    /**
     * @var string
     */
    public $totalTokens;
    protected $_name = [
        'completionTokens' => 'CompletionTokens',
        'completionTokensDetails' => 'CompletionTokensDetails',
        'promptTokens' => 'PromptTokens',
        'promptTokensDetails' => 'PromptTokensDetails',
        'totalTokens' => 'TotalTokens',
    ];

    public function validate()
    {
        if (\is_array($this->completionTokensDetails)) {
            Model::validateArray($this->completionTokensDetails);
        }
        if (\is_array($this->promptTokensDetails)) {
            Model::validateArray($this->promptTokensDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completionTokens) {
            $res['CompletionTokens'] = $this->completionTokens;
        }

        if (null !== $this->completionTokensDetails) {
            if (\is_array($this->completionTokensDetails)) {
                $res['CompletionTokensDetails'] = [];
                foreach ($this->completionTokensDetails as $key1 => $value1) {
                    $res['CompletionTokensDetails'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->promptTokens) {
            $res['PromptTokens'] = $this->promptTokens;
        }

        if (null !== $this->promptTokensDetails) {
            if (\is_array($this->promptTokensDetails)) {
                $res['PromptTokensDetails'] = [];
                foreach ($this->promptTokensDetails as $key1 => $value1) {
                    $res['PromptTokensDetails'][$key1] = $value1;
                }
            }
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

        if (isset($map['CompletionTokensDetails'])) {
            if (!empty($map['CompletionTokensDetails'])) {
                $model->completionTokensDetails = [];
                foreach ($map['CompletionTokensDetails'] as $key1 => $value1) {
                    $model->completionTokensDetails[$key1] = $value1;
                }
            }
        }

        if (isset($map['PromptTokens'])) {
            $model->promptTokens = $map['PromptTokens'];
        }

        if (isset($map['PromptTokensDetails'])) {
            if (!empty($map['PromptTokensDetails'])) {
                $model->promptTokensDetails = [];
                foreach ($map['PromptTokensDetails'] as $key1 => $value1) {
                    $model->promptTokensDetails[$key1] = $value1;
                }
            }
        }

        if (isset($map['TotalTokens'])) {
            $model->totalTokens = $map['TotalTokens'];
        }

        return $model;
    }
}

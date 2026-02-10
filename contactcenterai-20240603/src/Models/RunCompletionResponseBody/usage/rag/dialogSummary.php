<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\RunCompletionResponseBody\usage\rag;

use AlibabaCloud\Dara\Model;

class dialogSummary extends Model
{
    /**
     * @var int
     */
    public $inputTokens;

    /**
     * @var int
     */
    public $invokeCount;

    /**
     * @var int
     */
    public $outputTokens;
    protected $_name = [
        'inputTokens' => 'inputTokens',
        'invokeCount' => 'invokeCount',
        'outputTokens' => 'outputTokens',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputTokens) {
            $res['inputTokens'] = $this->inputTokens;
        }

        if (null !== $this->invokeCount) {
            $res['invokeCount'] = $this->invokeCount;
        }

        if (null !== $this->outputTokens) {
            $res['outputTokens'] = $this->outputTokens;
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
        if (isset($map['inputTokens'])) {
            $model->inputTokens = $map['inputTokens'];
        }

        if (isset($map['invokeCount'])) {
            $model->invokeCount = $map['invokeCount'];
        }

        if (isset($map['outputTokens'])) {
            $model->outputTokens = $map['outputTokens'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AnyTrans\V20250707\Models\GetLongTextTranslateTaskResponseBody\data;

use AlibabaCloud\Dara\Model;

class usage extends Model
{
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
    public $totalTokens;
    protected $_name = [
        'inputTokens' => 'inputTokens',
        'outputTokens' => 'outputTokens',
        'totalTokens' => 'totalTokens',
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

        if (null !== $this->outputTokens) {
            $res['outputTokens'] = $this->outputTokens;
        }

        if (null !== $this->totalTokens) {
            $res['totalTokens'] = $this->totalTokens;
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

        if (isset($map['outputTokens'])) {
            $model->outputTokens = $map['outputTokens'];
        }

        if (isset($map['totalTokens'])) {
            $model->totalTokens = $map['totalTokens'];
        }

        return $model;
    }
}

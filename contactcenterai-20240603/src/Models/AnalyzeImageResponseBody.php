<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models;

use AlibabaCloud\Tea\Model;

class AnalyzeImageResponseBody extends Model
{
    /**
     * @example stop
     *
     * @var string
     */
    public $finishReason;

    /**
     * @example 1000
     *
     * @var string
     */
    public $inputTokens;

    /**
     * @example 2000
     *
     * @var string
     */
    public $outputTokens;

    /**
     * @example 9*****-AE0D-5EE3-B1AF-48632CB0831C
     *
     * @var string
     */
    public $requestId;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $text;

    /**
     * @example 3000
     *
     * @var string
     */
    public $totalTokens;
    protected $_name = [
        'finishReason' => 'finishReason',
        'inputTokens'  => 'inputTokens',
        'outputTokens' => 'outputTokens',
        'requestId'    => 'requestId',
        'success'      => 'success',
        'text'         => 'text',
        'totalTokens'  => 'totalTokens',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->finishReason) {
            $res['finishReason'] = $this->finishReason;
        }
        if (null !== $this->inputTokens) {
            $res['inputTokens'] = $this->inputTokens;
        }
        if (null !== $this->outputTokens) {
            $res['outputTokens'] = $this->outputTokens;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }
        if (null !== $this->totalTokens) {
            $res['totalTokens'] = $this->totalTokens;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AnalyzeImageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['finishReason'])) {
            $model->finishReason = $map['finishReason'];
        }
        if (isset($map['inputTokens'])) {
            $model->inputTokens = $map['inputTokens'];
        }
        if (isset($map['outputTokens'])) {
            $model->outputTokens = $map['outputTokens'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['text'])) {
            $model->text = $map['text'];
        }
        if (isset($map['totalTokens'])) {
            $model->totalTokens = $map['totalTokens'];
        }

        return $model;
    }
}

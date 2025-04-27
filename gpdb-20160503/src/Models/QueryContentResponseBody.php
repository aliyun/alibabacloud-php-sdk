<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\matches;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\usage;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\windowMatches;

class QueryContentResponseBody extends Model
{
    /**
     * @var string
     */
    public $embeddingTokens;

    /**
     * @var matches
     */
    public $matches;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var usage
     */
    public $usage;

    /**
     * @var windowMatches
     */
    public $windowMatches;
    protected $_name = [
        'embeddingTokens' => 'EmbeddingTokens',
        'matches' => 'Matches',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'usage' => 'Usage',
        'windowMatches' => 'WindowMatches',
    ];

    public function validate()
    {
        if (null !== $this->matches) {
            $this->matches->validate();
        }
        if (null !== $this->usage) {
            $this->usage->validate();
        }
        if (null !== $this->windowMatches) {
            $this->windowMatches->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->embeddingTokens) {
            $res['EmbeddingTokens'] = $this->embeddingTokens;
        }

        if (null !== $this->matches) {
            $res['Matches'] = null !== $this->matches ? $this->matches->toArray($noStream) : $this->matches;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->usage) {
            $res['Usage'] = null !== $this->usage ? $this->usage->toArray($noStream) : $this->usage;
        }

        if (null !== $this->windowMatches) {
            $res['WindowMatches'] = null !== $this->windowMatches ? $this->windowMatches->toArray($noStream) : $this->windowMatches;
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
        if (isset($map['EmbeddingTokens'])) {
            $model->embeddingTokens = $map['EmbeddingTokens'];
        }

        if (isset($map['Matches'])) {
            $model->matches = matches::fromMap($map['Matches']);
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Usage'])) {
            $model->usage = usage::fromMap($map['Usage']);
        }

        if (isset($map['WindowMatches'])) {
            $model->windowMatches = windowMatches::fromMap($map['WindowMatches']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\entities;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\matches;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\relations;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\usage;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\QueryContentResponseBody\windowMatches;

class QueryContentResponseBody extends Model
{
    /**
     * @var string
     */
    public $embeddingTokens;

    /**
     * @var entities
     */
    public $entities;

    /**
     * @var matches
     */
    public $matches;

    /**
     * @var string
     */
    public $message;

    /**
     * @var relations
     */
    public $relations;

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
        'entities' => 'Entities',
        'matches' => 'Matches',
        'message' => 'Message',
        'relations' => 'Relations',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'usage' => 'Usage',
        'windowMatches' => 'WindowMatches',
    ];

    public function validate()
    {
        if (null !== $this->entities) {
            $this->entities->validate();
        }
        if (null !== $this->matches) {
            $this->matches->validate();
        }
        if (null !== $this->relations) {
            $this->relations->validate();
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

        if (null !== $this->entities) {
            $res['Entities'] = null !== $this->entities ? $this->entities->toArray($noStream) : $this->entities;
        }

        if (null !== $this->matches) {
            $res['Matches'] = null !== $this->matches ? $this->matches->toArray($noStream) : $this->matches;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->relations) {
            $res['Relations'] = null !== $this->relations ? $this->relations->toArray($noStream) : $this->relations;
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

        if (isset($map['Entities'])) {
            $model->entities = entities::fromMap($map['Entities']);
        }

        if (isset($map['Matches'])) {
            $model->matches = matches::fromMap($map['Matches']);
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Relations'])) {
            $model->relations = relations::fromMap($map['Relations']);
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

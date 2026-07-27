<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class QueryAlertRulesRequest extends Model
{
    /**
     * @var QueryAlertRulesInput
     */
    public $body;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $queryJson;
    protected $_name = [
        'body' => 'body',
        'clientToken' => 'clientToken',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'queryJson' => 'queryJson',
    ];

    public function validate()
    {
        if (null !== $this->body) {
            $this->body->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toArray($noStream) : $this->body;
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->queryJson) {
            $res['queryJson'] = $this->queryJson;
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
        if (isset($map['body'])) {
            $model->body = QueryAlertRulesInput::fromMap($map['body']);
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['queryJson'])) {
            $model->queryJson = $map['queryJson'];
        }

        return $model;
    }
}

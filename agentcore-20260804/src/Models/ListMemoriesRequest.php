<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models;

use AlibabaCloud\Dara\Model;

class ListMemoriesRequest extends Model
{
    /**
     * @var string
     */
    public $agentId;

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
    public $sessionId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $teamId;

    /**
     * @var string
     */
    public $types;

    /**
     * @var string
     */
    public $updatedAtFrom;

    /**
     * @var string
     */
    public $updatedAtTo;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var bool
     */
    public $valid;
    protected $_name = [
        'agentId' => 'agentId',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'sessionId' => 'sessionId',
        'source' => 'source',
        'teamId' => 'teamId',
        'types' => 'types',
        'updatedAtFrom' => 'updatedAtFrom',
        'updatedAtTo' => 'updatedAtTo',
        'userId' => 'userId',
        'valid' => 'valid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->teamId) {
            $res['teamId'] = $this->teamId;
        }

        if (null !== $this->types) {
            $res['types'] = $this->types;
        }

        if (null !== $this->updatedAtFrom) {
            $res['updatedAtFrom'] = $this->updatedAtFrom;
        }

        if (null !== $this->updatedAtTo) {
            $res['updatedAtTo'] = $this->updatedAtTo;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        if (null !== $this->valid) {
            $res['valid'] = $this->valid;
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
        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['teamId'])) {
            $model->teamId = $map['teamId'];
        }

        if (isset($map['types'])) {
            $model->types = $map['types'];
        }

        if (isset($map['updatedAtFrom'])) {
            $model->updatedAtFrom = $map['updatedAtFrom'];
        }

        if (isset($map['updatedAtTo'])) {
            $model->updatedAtTo = $map['updatedAtTo'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        if (isset($map['valid'])) {
            $model->valid = $map['valid'];
        }

        return $model;
    }
}

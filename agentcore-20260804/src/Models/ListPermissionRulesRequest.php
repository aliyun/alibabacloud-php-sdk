<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models;

use AlibabaCloud\Dara\Model;

class ListPermissionRulesRequest extends Model
{
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
    public $principalId;

    /**
     * @var string
     */
    public $principalName;

    /**
     * @var string
     */
    public $principalType;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $target;
    protected $_name = [
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'principalId' => 'principalId',
        'principalName' => 'principalName',
        'principalType' => 'principalType',
        'resourceId' => 'resourceId',
        'resourceType' => 'resourceType',
        'source' => 'source',
        'target' => 'target',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->principalId) {
            $res['principalId'] = $this->principalId;
        }

        if (null !== $this->principalName) {
            $res['principalName'] = $this->principalName;
        }

        if (null !== $this->principalType) {
            $res['principalType'] = $this->principalType;
        }

        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->target) {
            $res['target'] = $this->target;
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
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['principalId'])) {
            $model->principalId = $map['principalId'];
        }

        if (isset($map['principalName'])) {
            $model->principalName = $map['principalName'];
        }

        if (isset($map['principalType'])) {
            $model->principalType = $map['principalType'];
        }

        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['target'])) {
            $model->target = $map['target'];
        }

        return $model;
    }
}

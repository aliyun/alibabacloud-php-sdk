<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianControl\V20240816\Models;

use AlibabaCloud\Dara\Model;

class ListApiKeysRequest extends Model
{
    /**
     * @var string
     */
    public $apiKeyId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $skip;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'apiKeyId' => 'apiKeyId',
        'description' => 'description',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'skip' => 'skip',
        'uid' => 'uid',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeyId) {
            $res['apiKeyId'] = $this->apiKeyId;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->skip) {
            $res['skip'] = $this->skip;
        }

        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['apiKeyId'])) {
            $model->apiKeyId = $map['apiKeyId'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['skip'])) {
            $model->skip = $map['skip'];
        }

        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}

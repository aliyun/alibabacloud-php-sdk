<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models;

use AlibabaCloud\Dara\Model;

class ListImageCachesRequest extends Model
{
    /**
     * @var string
     */
    public $acrInstanceId;

    /**
     * @var string
     */
    public $digest;

    /**
     * @var string
     */
    public $imageRefContains;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $registry;

    /**
     * @var string
     */
    public $repository;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'acrInstanceId' => 'acrInstanceId',
        'digest' => 'digest',
        'imageRefContains' => 'imageRefContains',
        'maxResults' => 'maxResults',
        'namespace' => 'namespace',
        'nextToken' => 'nextToken',
        'regionId' => 'regionId',
        'registry' => 'registry',
        'repository' => 'repository',
        'status' => 'status',
        'tag' => 'tag',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acrInstanceId) {
            $res['acrInstanceId'] = $this->acrInstanceId;
        }

        if (null !== $this->digest) {
            $res['digest'] = $this->digest;
        }

        if (null !== $this->imageRefContains) {
            $res['imageRefContains'] = $this->imageRefContains;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->registry) {
            $res['registry'] = $this->registry;
        }

        if (null !== $this->repository) {
            $res['repository'] = $this->repository;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
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
        if (isset($map['acrInstanceId'])) {
            $model->acrInstanceId = $map['acrInstanceId'];
        }

        if (isset($map['digest'])) {
            $model->digest = $map['digest'];
        }

        if (isset($map['imageRefContains'])) {
            $model->imageRefContains = $map['imageRefContains'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['registry'])) {
            $model->registry = $map['registry'];
        }

        if (isset($map['repository'])) {
            $model->repository = $map['repository'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}

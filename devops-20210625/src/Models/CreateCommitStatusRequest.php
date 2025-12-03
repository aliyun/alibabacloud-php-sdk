<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class CreateCommitStatusRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var string
     */
    public $context;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $targetUrl;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $repositoryIdentity;

    /**
     * @var string
     */
    public $sha;
    protected $_name = [
        'accessToken' => 'accessToken',
        'context' => 'context',
        'description' => 'description',
        'state' => 'state',
        'targetUrl' => 'targetUrl',
        'organizationId' => 'organizationId',
        'repositoryIdentity' => 'repositoryIdentity',
        'sha' => 'sha',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }

        if (null !== $this->context) {
            $res['context'] = $this->context;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->targetUrl) {
            $res['targetUrl'] = $this->targetUrl;
        }

        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        if (null !== $this->repositoryIdentity) {
            $res['repositoryIdentity'] = $this->repositoryIdentity;
        }

        if (null !== $this->sha) {
            $res['sha'] = $this->sha;
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
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }

        if (isset($map['context'])) {
            $model->context = $map['context'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['targetUrl'])) {
            $model->targetUrl = $map['targetUrl'];
        }

        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        if (isset($map['repositoryIdentity'])) {
            $model->repositoryIdentity = $map['repositoryIdentity'];
        }

        if (isset($map['sha'])) {
            $model->sha = $map['sha'];
        }

        return $model;
    }
}

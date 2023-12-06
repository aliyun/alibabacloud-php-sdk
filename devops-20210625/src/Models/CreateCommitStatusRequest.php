<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class CreateCommitStatusRequest extends Model
{
    /**
     * @example f0b1e61db5961df5975a93f9129d2513
     *
     * @var string
     */
    public $accessToken;

    /**
     * @example default
     *
     * @var string
     */
    public $context;

    /**
     * @var string
     */
    public $description;

    /**
     * @example success
     *
     * @var string
     */
    public $state;

    /**
     * @example xxx
     *
     * @var string
     */
    public $targetUrl;

    /**
     * @example 5ebbc0228123212b59xxxxx
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example 2080972
     *
     * @var string
     */
    public $repositoryIdentity;

    /**
     * @example e0c1a1299a2656bfc155650bbd2df5e628fa1f4c
     *
     * @var string
     */
    public $sha;
    protected $_name = [
        'accessToken'        => 'accessToken',
        'context'            => 'context',
        'description'        => 'description',
        'state'              => 'state',
        'targetUrl'          => 'targetUrl',
        'organizationId'     => 'organizationId',
        'repositoryIdentity' => 'repositoryIdentity',
        'sha'                => 'sha',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateCommitStatusRequest
     */
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

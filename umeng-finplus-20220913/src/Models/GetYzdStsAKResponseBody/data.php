<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20220913\Models\GetYzdStsAKResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $internalKnowledgeId;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $secret;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'appId' => 'appId',
        'bucket' => 'bucket',
        'endpoint' => 'endpoint',
        'id' => 'id',
        'internalKnowledgeId' => 'internalKnowledgeId',
        'path' => 'path',
        'secret' => 'secret',
        'token' => 'token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->bucket) {
            $res['bucket'] = $this->bucket;
        }

        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->internalKnowledgeId) {
            $res['internalKnowledgeId'] = $this->internalKnowledgeId;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->secret) {
            $res['secret'] = $this->secret;
        }

        if (null !== $this->token) {
            $res['token'] = $this->token;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['bucket'])) {
            $model->bucket = $map['bucket'];
        }

        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['internalKnowledgeId'])) {
            $model->internalKnowledgeId = $map['internalKnowledgeId'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['secret'])) {
            $model->secret = $map['secret'];
        }

        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}

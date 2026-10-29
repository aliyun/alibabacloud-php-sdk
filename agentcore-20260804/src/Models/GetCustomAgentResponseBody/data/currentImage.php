<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetCustomAgentResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetCustomAgentResponseBody\data\currentImage\pullNetwork;

class currentImage extends Model
{
    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var pullNetwork
     */
    public $pullNetwork;

    /**
     * @var string
     */
    public $repo;

    /**
     * @var bool
     */
    public $skipTlsVerify;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'image' => 'image',
        'instanceId' => 'instanceId',
        'namespace' => 'namespace',
        'pullNetwork' => 'pullNetwork',
        'repo' => 'repo',
        'skipTlsVerify' => 'skipTlsVerify',
        'sourceType' => 'sourceType',
        'tag' => 'tag',
        'username' => 'username',
    ];

    public function validate()
    {
        if (null !== $this->pullNetwork) {
            $this->pullNetwork->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->image) {
            $res['image'] = $this->image;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->pullNetwork) {
            $res['pullNetwork'] = null !== $this->pullNetwork ? $this->pullNetwork->toArray($noStream) : $this->pullNetwork;
        }

        if (null !== $this->repo) {
            $res['repo'] = $this->repo;
        }

        if (null !== $this->skipTlsVerify) {
            $res['skipTlsVerify'] = $this->skipTlsVerify;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
        }

        if (null !== $this->username) {
            $res['username'] = $this->username;
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
        if (isset($map['image'])) {
            $model->image = $map['image'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['pullNetwork'])) {
            $model->pullNetwork = pullNetwork::fromMap($map['pullNetwork']);
        }

        if (isset($map['repo'])) {
            $model->repo = $map['repo'];
        }

        if (isset($map['skipTlsVerify'])) {
            $model->skipTlsVerify = $map['skipTlsVerify'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }

        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateImageCacheRequest;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var bool
     */
    public $accessInternet;

    /**
     * @var bool
     */
    public $accessVpc;

    /**
     * @var string
     */
    public $acrInstanceId;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $repository;

    /**
     * @var string
     */
    public $tag;
    protected $_name = [
        'accessInternet' => 'accessInternet',
        'accessVpc' => 'accessVpc',
        'acrInstanceId' => 'acrInstanceId',
        'namespace' => 'namespace',
        'repository' => 'repository',
        'tag' => 'tag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessInternet) {
            $res['accessInternet'] = $this->accessInternet;
        }

        if (null !== $this->accessVpc) {
            $res['accessVpc'] = $this->accessVpc;
        }

        if (null !== $this->acrInstanceId) {
            $res['acrInstanceId'] = $this->acrInstanceId;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->repository) {
            $res['repository'] = $this->repository;
        }

        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
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
        if (isset($map['accessInternet'])) {
            $model->accessInternet = $map['accessInternet'];
        }

        if (isset($map['accessVpc'])) {
            $model->accessVpc = $map['accessVpc'];
        }

        if (isset($map['acrInstanceId'])) {
            $model->acrInstanceId = $map['acrInstanceId'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['repository'])) {
            $model->repository = $map['repository'];
        }

        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }

        return $model;
    }
}

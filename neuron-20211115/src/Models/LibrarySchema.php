<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class LibrarySchema extends Model
{
    /**
     * @var string
     */
    public $artifactId;

    /**
     * @var int
     */
    public $companyId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gitGroup;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $industry;

    /**
     * @var int
     */
    public $libraryId;

    /**
     * @var int
     */
    public $marketId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var Provider
     */
    public $provider;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'artifactId' => 'artifactId',
        'companyId' => 'companyId',
        'description' => 'description',
        'gitGroup' => 'gitGroup',
        'groupId' => 'groupId',
        'id' => 'id',
        'industry' => 'industry',
        'libraryId' => 'libraryId',
        'marketId' => 'marketId',
        'name' => 'name',
        'provider' => 'provider',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->provider) {
            $this->provider->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifactId) {
            $res['artifactId'] = $this->artifactId;
        }

        if (null !== $this->companyId) {
            $res['companyId'] = $this->companyId;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->gitGroup) {
            $res['gitGroup'] = $this->gitGroup;
        }

        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->industry) {
            $res['industry'] = $this->industry;
        }

        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
        }

        if (null !== $this->marketId) {
            $res['marketId'] = $this->marketId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->provider) {
            $res['provider'] = null !== $this->provider ? $this->provider->toArray($noStream) : $this->provider;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['artifactId'])) {
            $model->artifactId = $map['artifactId'];
        }

        if (isset($map['companyId'])) {
            $model->companyId = $map['companyId'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['gitGroup'])) {
            $model->gitGroup = $map['gitGroup'];
        }

        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['industry'])) {
            $model->industry = $map['industry'];
        }

        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }

        if (isset($map['marketId'])) {
            $model->marketId = $map['marketId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['provider'])) {
            $model->provider = Provider::fromMap($map['provider']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}

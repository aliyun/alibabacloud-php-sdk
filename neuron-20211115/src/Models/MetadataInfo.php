<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MetadataInfo extends Model
{
    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $env;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var int
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $namespaceName;

    /**
     * @var int
     */
    public $orgId;
    protected $_name = [
        'enterpriseId' => 'enterpriseId',
        'env' => 'env',
        'id' => 'id',
        'instanceId' => 'instanceId',
        'namespaceId' => 'namespaceId',
        'namespaceName' => 'namespaceName',
        'orgId' => 'orgId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enterpriseId) {
            $res['enterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->env) {
            $res['env'] = $this->env;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->namespaceId) {
            $res['namespaceId'] = $this->namespaceId;
        }

        if (null !== $this->namespaceName) {
            $res['namespaceName'] = $this->namespaceName;
        }

        if (null !== $this->orgId) {
            $res['orgId'] = $this->orgId;
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
        if (isset($map['enterpriseId'])) {
            $model->enterpriseId = $map['enterpriseId'];
        }

        if (isset($map['env'])) {
            $model->env = $map['env'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['namespaceId'])) {
            $model->namespaceId = $map['namespaceId'];
        }

        if (isset($map['namespaceName'])) {
            $model->namespaceName = $map['namespaceName'];
        }

        if (isset($map['orgId'])) {
            $model->orgId = $map['orgId'];
        }

        return $model;
    }
}

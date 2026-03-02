<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ResourceUpdateCmd extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $configuration;

    /**
     * @var string
     */
    public $credentials;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $useScope;

    /**
     * @var string
     */
    public $useType;
    protected $_name = [
        'address' => 'address',
        'configuration' => 'configuration',
        'credentials' => 'credentials',
        'description' => 'description',
        'id' => 'id',
        'namespace' => 'namespace',
        'useScope' => 'useScope',
        'useType' => 'useType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }

        if (null !== $this->configuration) {
            $res['configuration'] = $this->configuration;
        }

        if (null !== $this->credentials) {
            $res['credentials'] = $this->credentials;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->useScope) {
            $res['useScope'] = $this->useScope;
        }

        if (null !== $this->useType) {
            $res['useType'] = $this->useType;
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
        if (isset($map['address'])) {
            $model->address = $map['address'];
        }

        if (isset($map['configuration'])) {
            $model->configuration = $map['configuration'];
        }

        if (isset($map['credentials'])) {
            $model->credentials = $map['credentials'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['useScope'])) {
            $model->useScope = $map['useScope'];
        }

        if (isset($map['useType'])) {
            $model->useType = $map['useType'];
        }

        return $model;
    }
}

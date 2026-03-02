<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ComponentTemplate extends Model
{
    /**
     * @var int
     */
    public $companyId;

    /**
     * @var ConfigModel[]
     */
    public $configuration;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isCustom;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $useScope;

    /**
     * @var string
     */
    public $useType;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'companyId' => 'companyId',
        'configuration' => 'configuration',
        'description' => 'description',
        'id' => 'id',
        'isCustom' => 'isCustom',
        'name' => 'name',
        'productId' => 'productId',
        'requestId' => 'requestId',
        'resourceType' => 'resourceType',
        'type' => 'type',
        'useScope' => 'useScope',
        'useType' => 'useType',
        'version' => 'version',
    ];

    public function validate()
    {
        if (\is_array($this->configuration)) {
            Model::validateArray($this->configuration);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->companyId) {
            $res['companyId'] = $this->companyId;
        }

        if (null !== $this->configuration) {
            if (\is_array($this->configuration)) {
                $res['configuration'] = [];
                $n1 = 0;
                foreach ($this->configuration as $item1) {
                    $res['configuration'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->isCustom) {
            $res['isCustom'] = $this->isCustom;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->useScope) {
            $res['useScope'] = $this->useScope;
        }

        if (null !== $this->useType) {
            $res['useType'] = $this->useType;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['companyId'])) {
            $model->companyId = $map['companyId'];
        }

        if (isset($map['configuration'])) {
            if (!empty($map['configuration'])) {
                $model->configuration = [];
                $n1 = 0;
                foreach ($map['configuration'] as $item1) {
                    $model->configuration[$n1] = ConfigModel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['isCustom'])) {
            $model->isCustom = $map['isCustom'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['useScope'])) {
            $model->useScope = $map['useScope'];
        }

        if (isset($map['useType'])) {
            $model->useType = $map['useType'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}

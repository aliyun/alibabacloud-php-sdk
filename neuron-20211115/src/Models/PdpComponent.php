<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PdpComponent extends Model
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
     * @var string
     */
    public $env;

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
     * @var int
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var ConfigModel[]
     */
    public $templateConfiguration;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var int
     */
    public $templateVersion;

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
    protected $_name = [
        'companyId' => 'companyId',
        'configuration' => 'configuration',
        'description' => 'description',
        'env' => 'env',
        'id' => 'id',
        'isCustom' => 'isCustom',
        'name' => 'name',
        'productId' => 'productId',
        'requestId' => 'requestId',
        'resourceId' => 'resourceId',
        'resourceType' => 'resourceType',
        'scope' => 'scope',
        'templateConfiguration' => 'templateConfiguration',
        'templateId' => 'templateId',
        'templateVersion' => 'templateVersion',
        'type' => 'type',
        'useScope' => 'useScope',
        'useType' => 'useType',
    ];

    public function validate()
    {
        if (\is_array($this->configuration)) {
            Model::validateArray($this->configuration);
        }
        if (\is_array($this->templateConfiguration)) {
            Model::validateArray($this->templateConfiguration);
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

        if (null !== $this->env) {
            $res['env'] = $this->env;
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

        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        if (null !== $this->templateConfiguration) {
            if (\is_array($this->templateConfiguration)) {
                $res['templateConfiguration'] = [];
                $n1 = 0;
                foreach ($this->templateConfiguration as $item1) {
                    $res['templateConfiguration'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }

        if (null !== $this->templateVersion) {
            $res['templateVersion'] = $this->templateVersion;
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

        if (isset($map['env'])) {
            $model->env = $map['env'];
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

        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        if (isset($map['templateConfiguration'])) {
            if (!empty($map['templateConfiguration'])) {
                $model->templateConfiguration = [];
                $n1 = 0;
                foreach ($map['templateConfiguration'] as $item1) {
                    $model->templateConfiguration[$n1] = ConfigModel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        if (isset($map['templateVersion'])) {
            $model->templateVersion = $map['templateVersion'];
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

        return $model;
    }
}

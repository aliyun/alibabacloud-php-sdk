<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PreviewComponentCrdSchemaCmd extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var ConfigModel[]
     */
    public $configuration;

    /**
     * @var string
     */
    public $credentials;

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
     * @var string
     */
    public $reesourceVersion;

    /**
     * @var int
     */
    public $resourceId;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'address' => 'address',
        'configuration' => 'configuration',
        'credentials' => 'credentials',
        'id' => 'id',
        'isCustom' => 'isCustom',
        'name' => 'name',
        'reesourceVersion' => 'reesourceVersion',
        'resourceId' => 'resourceId',
        'scope' => 'scope',
        'templateId' => 'templateId',
        'type' => 'type',
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
        if (null !== $this->address) {
            $res['address'] = $this->address;
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

        if (null !== $this->credentials) {
            $res['credentials'] = $this->credentials;
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

        if (null !== $this->reesourceVersion) {
            $res['reesourceVersion'] = $this->reesourceVersion;
        }

        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
            if (!empty($map['configuration'])) {
                $model->configuration = [];
                $n1 = 0;
                foreach ($map['configuration'] as $item1) {
                    $model->configuration[$n1] = ConfigModel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['credentials'])) {
            $model->credentials = $map['credentials'];
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

        if (isset($map['reesourceVersion'])) {
            $model->reesourceVersion = $map['reesourceVersion'];
        }

        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}

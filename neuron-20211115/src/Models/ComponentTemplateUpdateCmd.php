<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ComponentTemplateUpdateCmd extends Model
{
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
     * @var string
     */
    public $useScope;

    /**
     * @var string
     */
    public $useType;
    protected $_name = [
        'configuration' => 'configuration',
        'description' => 'description',
        'id' => 'id',
        'useScope' => 'useScope',
        'useType' => 'useType',
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

        if (isset($map['useScope'])) {
            $model->useScope = $map['useScope'];
        }

        if (isset($map['useType'])) {
            $model->useType = $map['useType'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class UpdateModelApiRequest extends Model
{
    /**
     * @var string
     */
    public $basePath;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $directSupplyFallbackEnabled;

    /**
     * @var string[]
     */
    public $domainIds;

    /**
     * @var bool
     */
    public $enableAuth;

    /**
     * @var int
     */
    public $firstByteTimeout;

    /**
     * @var ModelSelection
     */
    public $modelSelection;

    /**
     * @var string
     */
    public $name;

    /**
     * @var ModelApiPolicyConfig[]
     */
    public $policyConfigs;
    protected $_name = [
        'basePath' => 'basePath',
        'description' => 'description',
        'directSupplyFallbackEnabled' => 'directSupplyFallbackEnabled',
        'domainIds' => 'domainIds',
        'enableAuth' => 'enableAuth',
        'firstByteTimeout' => 'firstByteTimeout',
        'modelSelection' => 'modelSelection',
        'name' => 'name',
        'policyConfigs' => 'policyConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->domainIds)) {
            Model::validateArray($this->domainIds);
        }
        if (null !== $this->modelSelection) {
            $this->modelSelection->validate();
        }
        if (\is_array($this->policyConfigs)) {
            Model::validateArray($this->policyConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->basePath) {
            $res['basePath'] = $this->basePath;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->directSupplyFallbackEnabled) {
            $res['directSupplyFallbackEnabled'] = $this->directSupplyFallbackEnabled;
        }

        if (null !== $this->domainIds) {
            if (\is_array($this->domainIds)) {
                $res['domainIds'] = [];
                $n1 = 0;
                foreach ($this->domainIds as $item1) {
                    $res['domainIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enableAuth) {
            $res['enableAuth'] = $this->enableAuth;
        }

        if (null !== $this->firstByteTimeout) {
            $res['firstByteTimeout'] = $this->firstByteTimeout;
        }

        if (null !== $this->modelSelection) {
            $res['modelSelection'] = null !== $this->modelSelection ? $this->modelSelection->toArray($noStream) : $this->modelSelection;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->policyConfigs) {
            if (\is_array($this->policyConfigs)) {
                $res['policyConfigs'] = [];
                $n1 = 0;
                foreach ($this->policyConfigs as $item1) {
                    $res['policyConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['basePath'])) {
            $model->basePath = $map['basePath'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['directSupplyFallbackEnabled'])) {
            $model->directSupplyFallbackEnabled = $map['directSupplyFallbackEnabled'];
        }

        if (isset($map['domainIds'])) {
            if (!empty($map['domainIds'])) {
                $model->domainIds = [];
                $n1 = 0;
                foreach ($map['domainIds'] as $item1) {
                    $model->domainIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['enableAuth'])) {
            $model->enableAuth = $map['enableAuth'];
        }

        if (isset($map['firstByteTimeout'])) {
            $model->firstByteTimeout = $map['firstByteTimeout'];
        }

        if (isset($map['modelSelection'])) {
            $model->modelSelection = ModelSelection::fromMap($map['modelSelection']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['policyConfigs'])) {
            if (!empty($map['policyConfigs'])) {
                $model->policyConfigs = [];
                $n1 = 0;
                foreach ($map['policyConfigs'] as $item1) {
                    $model->policyConfigs[$n1] = ModelApiPolicyConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

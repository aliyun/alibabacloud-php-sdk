<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianControl\V20240816\Models\GetApiKeyResponseBody\apiKey\authSetModel;

use AlibabaCloud\Dara\Model;

class authModelStructure extends Model
{
    /**
     * @var string[]
     */
    public $defineModels;

    /**
     * @var string[]
     */
    public $deployments;

    /**
     * @var bool
     */
    public $isAllowAccessAllModels;

    /**
     * @var string[]
     */
    public $models;
    protected $_name = [
        'defineModels' => 'defineModels',
        'deployments' => 'deployments',
        'isAllowAccessAllModels' => 'isAllowAccessAllModels',
        'models' => 'models',
    ];

    public function validate()
    {
        if (\is_array($this->defineModels)) {
            Model::validateArray($this->defineModels);
        }
        if (\is_array($this->deployments)) {
            Model::validateArray($this->deployments);
        }
        if (\is_array($this->models)) {
            Model::validateArray($this->models);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defineModels) {
            if (\is_array($this->defineModels)) {
                $res['defineModels'] = [];
                $n1 = 0;
                foreach ($this->defineModels as $item1) {
                    $res['defineModels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->deployments) {
            if (\is_array($this->deployments)) {
                $res['deployments'] = [];
                $n1 = 0;
                foreach ($this->deployments as $item1) {
                    $res['deployments'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->isAllowAccessAllModels) {
            $res['isAllowAccessAllModels'] = $this->isAllowAccessAllModels;
        }

        if (null !== $this->models) {
            if (\is_array($this->models)) {
                $res['models'] = [];
                $n1 = 0;
                foreach ($this->models as $item1) {
                    $res['models'][$n1] = $item1;
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
        if (isset($map['defineModels'])) {
            if (!empty($map['defineModels'])) {
                $model->defineModels = [];
                $n1 = 0;
                foreach ($map['defineModels'] as $item1) {
                    $model->defineModels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['deployments'])) {
            if (!empty($map['deployments'])) {
                $model->deployments = [];
                $n1 = 0;
                foreach ($map['deployments'] as $item1) {
                    $model->deployments[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['isAllowAccessAllModels'])) {
            $model->isAllowAccessAllModels = $map['isAllowAccessAllModels'];
        }

        if (isset($map['models'])) {
            if (!empty($map['models'])) {
                $model->models = [];
                $n1 = 0;
                foreach ($map['models'] as $item1) {
                    $model->models[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RecipeEvalDetailView extends Model
{
    /**
     * @var string
     */
    public $command;

    /**
     * @var int
     */
    public $detailId;

    /**
     * @var string[]
     */
    public $envs;

    /**
     * @var string
     */
    public $image;

    /**
     * @var bool
     */
    public $isDefaultDetail;

    /**
     * @var string
     */
    public $model;

    /**
     * @var mixed[]
     */
    public $paramsJson;

    /**
     * @var string
     */
    public $renderer;

    /**
     * @var RecipeResourceView
     */
    public $resource;

    /**
     * @var int
     */
    public $runtimeMinutes;
    protected $_name = [
        'command' => 'Command',
        'detailId' => 'DetailId',
        'envs' => 'Envs',
        'image' => 'Image',
        'isDefaultDetail' => 'IsDefaultDetail',
        'model' => 'Model',
        'paramsJson' => 'ParamsJson',
        'renderer' => 'Renderer',
        'resource' => 'Resource',
        'runtimeMinutes' => 'RuntimeMinutes',
    ];

    public function validate()
    {
        if (\is_array($this->envs)) {
            Model::validateArray($this->envs);
        }
        if (\is_array($this->paramsJson)) {
            Model::validateArray($this->paramsJson);
        }
        if (null !== $this->resource) {
            $this->resource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }

        if (null !== $this->detailId) {
            $res['DetailId'] = $this->detailId;
        }

        if (null !== $this->envs) {
            if (\is_array($this->envs)) {
                $res['Envs'] = [];
                foreach ($this->envs as $key1 => $value1) {
                    $res['Envs'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        if (null !== $this->isDefaultDetail) {
            $res['IsDefaultDetail'] = $this->isDefaultDetail;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->paramsJson) {
            if (\is_array($this->paramsJson)) {
                $res['ParamsJson'] = [];
                foreach ($this->paramsJson as $key1 => $value1) {
                    $res['ParamsJson'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->renderer) {
            $res['Renderer'] = $this->renderer;
        }

        if (null !== $this->resource) {
            $res['Resource'] = null !== $this->resource ? $this->resource->toArray($noStream) : $this->resource;
        }

        if (null !== $this->runtimeMinutes) {
            $res['RuntimeMinutes'] = $this->runtimeMinutes;
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
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }

        if (isset($map['DetailId'])) {
            $model->detailId = $map['DetailId'];
        }

        if (isset($map['Envs'])) {
            if (!empty($map['Envs'])) {
                $model->envs = [];
                foreach ($map['Envs'] as $key1 => $value1) {
                    $model->envs[$key1] = $value1;
                }
            }
        }

        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        if (isset($map['IsDefaultDetail'])) {
            $model->isDefaultDetail = $map['IsDefaultDetail'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['ParamsJson'])) {
            if (!empty($map['ParamsJson'])) {
                $model->paramsJson = [];
                foreach ($map['ParamsJson'] as $key1 => $value1) {
                    $model->paramsJson[$key1] = $value1;
                }
            }
        }

        if (isset($map['Renderer'])) {
            $model->renderer = $map['Renderer'];
        }

        if (isset($map['Resource'])) {
            $model->resource = RecipeResourceView::fromMap($map['Resource']);
        }

        if (isset($map['RuntimeMinutes'])) {
            $model->runtimeMinutes = $map['RuntimeMinutes'];
        }

        return $model;
    }
}

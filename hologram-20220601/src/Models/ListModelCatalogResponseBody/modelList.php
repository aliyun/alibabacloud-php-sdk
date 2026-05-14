<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\ListModelCatalogResponseBody;

use AlibabaCloud\Dara\Model;

class modelList extends Model
{
    /**
     * @var string
     */
    public $defaultParams;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var string
     */
    public $paramsExample;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $serviceDeployRegion;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'defaultParams' => 'defaultParams',
        'extra' => 'extra',
        'modelType' => 'modelType',
        'paramsExample' => 'paramsExample',
        'provider' => 'provider',
        'serviceDeployRegion' => 'serviceDeployRegion',
        'taskType' => 'taskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultParams) {
            $res['defaultParams'] = $this->defaultParams;
        }

        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }

        if (null !== $this->modelType) {
            $res['modelType'] = $this->modelType;
        }

        if (null !== $this->paramsExample) {
            $res['paramsExample'] = $this->paramsExample;
        }

        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }

        if (null !== $this->serviceDeployRegion) {
            $res['serviceDeployRegion'] = $this->serviceDeployRegion;
        }

        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
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
        if (isset($map['defaultParams'])) {
            $model->defaultParams = $map['defaultParams'];
        }

        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }

        if (isset($map['modelType'])) {
            $model->modelType = $map['modelType'];
        }

        if (isset($map['paramsExample'])) {
            $model->paramsExample = $map['paramsExample'];
        }

        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        if (isset($map['serviceDeployRegion'])) {
            $model->serviceDeployRegion = $map['serviceDeployRegion'];
        }

        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }

        return $model;
    }
}

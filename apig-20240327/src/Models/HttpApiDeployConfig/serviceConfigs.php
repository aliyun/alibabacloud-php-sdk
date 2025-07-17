<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDeployConfig;

use AlibabaCloud\Tea\Model;

class serviceConfigs extends Model
{
    /**
     * @example qwen-max
     *
     * @var string
     */
    public $modelName;

    /**
     * @example qwen-*
     *
     * @var string
     */
    public $modelNamePattern;

    /**
     * @example svc-xxx
     *
     * @var string
     */
    public $serviceId;

    /**
     * @example 100
     *
     * @var int
     */
    public $weight;
    protected $_name = [
        'modelName' => 'modelName',
        'modelNamePattern' => 'modelNamePattern',
        'serviceId' => 'serviceId',
        'weight' => 'weight',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
        }
        if (null !== $this->modelNamePattern) {
            $res['modelNamePattern'] = $this->modelNamePattern;
        }
        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }
        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }
        if (isset($map['modelNamePattern'])) {
            $model->modelNamePattern = $map['modelNamePattern'];
        }
        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }
        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}

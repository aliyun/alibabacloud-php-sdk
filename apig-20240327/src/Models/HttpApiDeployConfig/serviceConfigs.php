<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\HttpApiDeployConfig;

use AlibabaCloud\Dara\Model;

class serviceConfigs extends Model
{
    /**
     * @var string
     */
    public $intentCode;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelNamePattern;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'intentCode' => 'intentCode',
        'modelName' => 'modelName',
        'modelNamePattern' => 'modelNamePattern',
        'serviceId' => 'serviceId',
        'weight' => 'weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->intentCode) {
            $res['intentCode'] = $this->intentCode;
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['intentCode'])) {
            $model->intentCode = $map['intentCode'];
        }

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

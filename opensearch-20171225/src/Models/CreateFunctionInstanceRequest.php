<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateFunctionInstanceRequest\createParameters;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateFunctionInstanceRequest\usageParameters;
use AlibabaCloud\Tea\Model;

class CreateFunctionInstanceRequest extends Model
{
    /**
     * @description 创建参数
     *
     * @var createParameters[]
     */
    public $createParameters;

    /**
     * @description 周期训练
     *
     * @var string
     */
    public $cron;

    /**
     * @description 实例描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 功能类型
     *
     * @var string
     */
    public $functionType;

    /**
     * @description 实例名称
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description 模型类型
     *
     * @var string
     */
    public $modelType;

    /**
     * @description 使用参数
     *
     * @var usageParameters[]
     */
    public $usageParameters;
    protected $_name = [
        'createParameters' => 'createParameters',
        'cron'             => 'cron',
        'description'      => 'description',
        'functionType'     => 'functionType',
        'instanceName'     => 'instanceName',
        'modelType'        => 'modelType',
        'usageParameters'  => 'usageParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createParameters) {
            $res['createParameters'] = [];
            if (null !== $this->createParameters && \is_array($this->createParameters)) {
                $n = 0;
                foreach ($this->createParameters as $item) {
                    $res['createParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cron) {
            $res['cron'] = $this->cron;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->functionType) {
            $res['functionType'] = $this->functionType;
        }
        if (null !== $this->instanceName) {
            $res['instanceName'] = $this->instanceName;
        }
        if (null !== $this->modelType) {
            $res['modelType'] = $this->modelType;
        }
        if (null !== $this->usageParameters) {
            $res['usageParameters'] = [];
            if (null !== $this->usageParameters && \is_array($this->usageParameters)) {
                $n = 0;
                foreach ($this->usageParameters as $item) {
                    $res['usageParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFunctionInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createParameters'])) {
            if (!empty($map['createParameters'])) {
                $model->createParameters = [];
                $n                       = 0;
                foreach ($map['createParameters'] as $item) {
                    $model->createParameters[$n++] = null !== $item ? createParameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['cron'])) {
            $model->cron = $map['cron'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['functionType'])) {
            $model->functionType = $map['functionType'];
        }
        if (isset($map['instanceName'])) {
            $model->instanceName = $map['instanceName'];
        }
        if (isset($map['modelType'])) {
            $model->modelType = $map['modelType'];
        }
        if (isset($map['usageParameters'])) {
            if (!empty($map['usageParameters'])) {
                $model->usageParameters = [];
                $n                      = 0;
                foreach ($map['usageParameters'] as $item) {
                    $model->usageParameters[$n++] = null !== $item ? usageParameters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

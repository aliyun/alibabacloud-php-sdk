<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\EtlJob\functionConfig;
use AlibabaCloud\SDK\Sls\V20201230\Models\EtlJob\logConfig;
use AlibabaCloud\SDK\Sls\V20201230\Models\EtlJob\sourceConfig;
use AlibabaCloud\SDK\Sls\V20201230\Models\EtlJob\triggerConfig;
use AlibabaCloud\Tea\Model;

class EtlJob extends Model
{
    /**
     * @description 是否启用
     *
     * @var bool
     */
    public $enable;

    /**
     * @description 任务名称
     *
     * @var string
     */
    public $etlJobName;

    /**
     * @description 运行函数配置
     *
     * @var functionConfig
     */
    public $functionConfig;

    /**
     * @description 参数列表
     *
     * @var string[]
     */
    public $functionParameter;

    /**
     * @description 日志配置
     *
     * @var logConfig
     */
    public $logConfig;

    /**
     * @description 配置数据来源
     *
     * @var sourceConfig
     */
    public $sourceConfig;

    /**
     * @description 触发器配置
     *
     * @var triggerConfig
     */
    public $triggerConfig;
    protected $_name = [
        'enable'            => 'enable',
        'etlJobName'        => 'etlJobName',
        'functionConfig'    => 'functionConfig',
        'functionParameter' => 'functionParameter',
        'logConfig'         => 'logConfig',
        'sourceConfig'      => 'sourceConfig',
        'triggerConfig'     => 'triggerConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->etlJobName) {
            $res['etlJobName'] = $this->etlJobName;
        }
        if (null !== $this->functionConfig) {
            $res['functionConfig'] = null !== $this->functionConfig ? $this->functionConfig->toMap() : null;
        }
        if (null !== $this->functionParameter) {
            $res['functionParameter'] = $this->functionParameter;
        }
        if (null !== $this->logConfig) {
            $res['logConfig'] = null !== $this->logConfig ? $this->logConfig->toMap() : null;
        }
        if (null !== $this->sourceConfig) {
            $res['sourceConfig'] = null !== $this->sourceConfig ? $this->sourceConfig->toMap() : null;
        }
        if (null !== $this->triggerConfig) {
            $res['triggerConfig'] = null !== $this->triggerConfig ? $this->triggerConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EtlJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['etlJobName'])) {
            $model->etlJobName = $map['etlJobName'];
        }
        if (isset($map['functionConfig'])) {
            $model->functionConfig = functionConfig::fromMap($map['functionConfig']);
        }
        if (isset($map['functionParameter'])) {
            $model->functionParameter = $map['functionParameter'];
        }
        if (isset($map['logConfig'])) {
            $model->logConfig = logConfig::fromMap($map['logConfig']);
        }
        if (isset($map['sourceConfig'])) {
            $model->sourceConfig = sourceConfig::fromMap($map['sourceConfig']);
        }
        if (isset($map['triggerConfig'])) {
            $model->triggerConfig = triggerConfig::fromMap($map['triggerConfig']);
        }

        return $model;
    }
}

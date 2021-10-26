<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class LogConfig extends Model
{
    /**
     * @description 开启实例级别指标
     *
     * @var bool
     */
    public $enableInstanceMetrics;

    /**
     * @description 开启请求级别指标
     *
     * @var bool
     */
    public $enableRequestMetrics;

    /**
     * @description 日志切分规则
     *
     * @var string
     */
    public $logBeginRule;

    /**
     * @description 日志库
     *
     * @var string
     */
    public $logstore;

    /**
     * @description 日志项目
     *
     * @var string
     */
    public $project;
    protected $_name = [
        'enableInstanceMetrics' => 'enableInstanceMetrics',
        'enableRequestMetrics'  => 'enableRequestMetrics',
        'logBeginRule'          => 'logBeginRule',
        'logstore'              => 'logstore',
        'project'               => 'project',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableInstanceMetrics) {
            $res['enableInstanceMetrics'] = $this->enableInstanceMetrics;
        }
        if (null !== $this->enableRequestMetrics) {
            $res['enableRequestMetrics'] = $this->enableRequestMetrics;
        }
        if (null !== $this->logBeginRule) {
            $res['logBeginRule'] = $this->logBeginRule;
        }
        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LogConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enableInstanceMetrics'])) {
            $model->enableInstanceMetrics = $map['enableInstanceMetrics'];
        }
        if (isset($map['enableRequestMetrics'])) {
            $model->enableRequestMetrics = $map['enableRequestMetrics'];
        }
        if (isset($map['logBeginRule'])) {
            $model->logBeginRule = $map['logBeginRule'];
        }
        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }
        if (isset($map['project'])) {
            $model->project = $map['project'];
        }

        return $model;
    }
}

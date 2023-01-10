<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class LogConfig extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $enableInstanceMetrics;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableRequestMetrics;

    /**
     * @example DefaultRegex
     *
     * @var string
     */
    public $logBeginRule;

    /**
     * @example test-prj
     *
     * @var string
     */
    public $logstore;

    /**
     * @example test-logstore
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

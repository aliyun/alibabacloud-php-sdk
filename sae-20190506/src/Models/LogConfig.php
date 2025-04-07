<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class LogConfig extends Model
{
    /**
     * @var bool
     */
    public $enableInstanceMetrics;

    /**
     * @var bool
     */
    public $enableRequestMetrics;

    /**
     * @var string
     */
    public $logBeginRule;

    /**
     * @var string
     */
    public $logstore;

    /**
     * @var string
     */
    public $project;

    /**
     * @var bool
     */
    public $pushToUserSLS;
    protected $_name = [
        'enableInstanceMetrics' => 'enableInstanceMetrics',
        'enableRequestMetrics' => 'enableRequestMetrics',
        'logBeginRule' => 'logBeginRule',
        'logstore' => 'logstore',
        'project' => 'project',
        'pushToUserSLS' => 'pushToUserSLS',
    ];

    public function validate() {}

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
        if (null !== $this->pushToUserSLS) {
            $res['pushToUserSLS'] = $this->pushToUserSLS;
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
        if (isset($map['pushToUserSLS'])) {
            $model->pushToUserSLS = $map['pushToUserSLS'];
        }

        return $model;
    }
}

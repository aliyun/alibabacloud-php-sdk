<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\JobConfig;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\JobLogConfig;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\SourceConfig;

class LogTriggerConfig extends Model {
    protected $_name = [
        'enable' => 'enable',
        'functionParameter' => 'functionParameter',
        'jobConfig' => 'jobConfig',
        'logConfig' => 'logConfig',
        'sourceConfig' => 'sourceConfig',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->functionParameter) {
            $res['functionParameter'] = $this->functionParameter;
        }
        if (null !== $this->jobConfig) {
            $res['jobConfig'] = null !== $this->jobConfig ? $this->jobConfig->toMap() : null;
        }
        if (null !== $this->logConfig) {
            $res['logConfig'] = null !== $this->logConfig ? $this->logConfig->toMap() : null;
        }
        if (null !== $this->sourceConfig) {
            $res['sourceConfig'] = null !== $this->sourceConfig ? $this->sourceConfig->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return LogTriggerConfig
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['enable'])){
            $model->enable = $map['enable'];
        }
        if(isset($map['functionParameter'])){
            $model->functionParameter = $map['functionParameter'];
        }
        if(isset($map['jobConfig'])){
            $model->jobConfig = JobConfig::fromMap($map['jobConfig']);
        }
        if(isset($map['logConfig'])){
            $model->logConfig = JobLogConfig::fromMap($map['logConfig']);
        }
        if(isset($map['sourceConfig'])){
            $model->sourceConfig = SourceConfig::fromMap($map['sourceConfig']);
        }
        return $model;
    }
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string[]
     */
    public $functionParameter;

    /**
     * @var JobConfig
     */
    public $jobConfig;

    /**
     * @var JobLogConfig
     */
    public $logConfig;

    /**
     * @var SourceConfig
     */
    public $sourceConfig;

}

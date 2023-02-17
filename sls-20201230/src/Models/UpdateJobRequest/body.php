<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\UpdateJobRequest;

use AlibabaCloud\SDK\Sls\V20201230\Models\EtlFunctionConfig;
use AlibabaCloud\SDK\Sls\V20201230\Models\EtlLogConfig;
use AlibabaCloud\SDK\Sls\V20201230\Models\EtlSourceConfig;
use AlibabaCloud\SDK\Sls\V20201230\Models\EtlTriggerConfig;
use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $enable;

    /**
     * @var EtlFunctionConfig
     */
    public $functionConfig;

    /**
     * @var string
     */
    public $functionParameter;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var EtlLogConfig
     */
    public $logConfig;

    /**
     * @var EtlSourceConfig
     */
    public $sourceConfig;

    /**
     * @var EtlTriggerConfig
     */
    public $triggerConfig;
    protected $_name = [
        'enable'            => 'enable',
        'functionConfig'    => 'functionConfig',
        'functionParameter' => 'functionParameter',
        'jobName'           => 'jobName',
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
        if (null !== $this->functionConfig) {
            $res['functionConfig'] = null !== $this->functionConfig ? $this->functionConfig->toMap() : null;
        }
        if (null !== $this->functionParameter) {
            $res['functionParameter'] = $this->functionParameter;
        }
        if (null !== $this->jobName) {
            $res['jobName'] = $this->jobName;
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
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['functionConfig'])) {
            $model->functionConfig = EtlFunctionConfig::fromMap($map['functionConfig']);
        }
        if (isset($map['functionParameter'])) {
            $model->functionParameter = $map['functionParameter'];
        }
        if (isset($map['jobName'])) {
            $model->jobName = $map['jobName'];
        }
        if (isset($map['logConfig'])) {
            $model->logConfig = EtlLogConfig::fromMap($map['logConfig']);
        }
        if (isset($map['sourceConfig'])) {
            $model->sourceConfig = EtlSourceConfig::fromMap($map['sourceConfig']);
        }
        if (isset($map['triggerConfig'])) {
            $model->triggerConfig = EtlTriggerConfig::fromMap($map['triggerConfig']);
        }

        return $model;
    }
}

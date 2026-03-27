<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantSettingsResponseBody;

use AlibabaCloud\Dara\Model;

class resourceUsageConfig extends Model
{
    /**
     * @var int
     */
    public $cpuLimit;

    /**
     * @var bool
     */
    public $keepScriptFile;

    /**
     * @var int
     */
    public $logFileCountLimit;

    /**
     * @var string
     */
    public $logSizeLimit;

    /**
     * @var string
     */
    public $memoryLimit;

    /**
     * @var int
     */
    public $overloadLimit;
    protected $_name = [
        'cpuLimit' => 'CpuLimit',
        'keepScriptFile' => 'KeepScriptFile',
        'logFileCountLimit' => 'LogFileCountLimit',
        'logSizeLimit' => 'LogSizeLimit',
        'memoryLimit' => 'MemoryLimit',
        'overloadLimit' => 'OverloadLimit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuLimit) {
            $res['CpuLimit'] = $this->cpuLimit;
        }

        if (null !== $this->keepScriptFile) {
            $res['KeepScriptFile'] = $this->keepScriptFile;
        }

        if (null !== $this->logFileCountLimit) {
            $res['LogFileCountLimit'] = $this->logFileCountLimit;
        }

        if (null !== $this->logSizeLimit) {
            $res['LogSizeLimit'] = $this->logSizeLimit;
        }

        if (null !== $this->memoryLimit) {
            $res['MemoryLimit'] = $this->memoryLimit;
        }

        if (null !== $this->overloadLimit) {
            $res['OverloadLimit'] = $this->overloadLimit;
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
        if (isset($map['CpuLimit'])) {
            $model->cpuLimit = $map['CpuLimit'];
        }

        if (isset($map['KeepScriptFile'])) {
            $model->keepScriptFile = $map['KeepScriptFile'];
        }

        if (isset($map['LogFileCountLimit'])) {
            $model->logFileCountLimit = $map['LogFileCountLimit'];
        }

        if (isset($map['LogSizeLimit'])) {
            $model->logSizeLimit = $map['LogSizeLimit'];
        }

        if (isset($map['MemoryLimit'])) {
            $model->memoryLimit = $map['MemoryLimit'];
        }

        if (isset($map['OverloadLimit'])) {
            $model->overloadLimit = $map['OverloadLimit'];
        }

        return $model;
    }
}

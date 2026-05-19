<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ADBAI\V20250812\Models\ModifyEmbodiedAIPlatformRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\ModifyEmbodiedAIPlatformRequest\rayTrainConfig\gpuSpecs;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\ModifyEmbodiedAIPlatformRequest\rayTrainConfig\terminalConfig;

class rayTrainConfig extends Model
{
    /**
     * @var int
     */
    public $cpuAcu;

    /**
     * @var gpuSpecs[]
     */
    public $gpuSpecs;

    /**
     * @var terminalConfig
     */
    public $terminalConfig;
    protected $_name = [
        'cpuAcu' => 'CpuAcu',
        'gpuSpecs' => 'GpuSpecs',
        'terminalConfig' => 'TerminalConfig',
    ];

    public function validate()
    {
        if (\is_array($this->gpuSpecs)) {
            Model::validateArray($this->gpuSpecs);
        }
        if (null !== $this->terminalConfig) {
            $this->terminalConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuAcu) {
            $res['CpuAcu'] = $this->cpuAcu;
        }

        if (null !== $this->gpuSpecs) {
            if (\is_array($this->gpuSpecs)) {
                $res['GpuSpecs'] = [];
                $n1 = 0;
                foreach ($this->gpuSpecs as $item1) {
                    $res['GpuSpecs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->terminalConfig) {
            $res['TerminalConfig'] = null !== $this->terminalConfig ? $this->terminalConfig->toArray($noStream) : $this->terminalConfig;
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
        if (isset($map['CpuAcu'])) {
            $model->cpuAcu = $map['CpuAcu'];
        }

        if (isset($map['GpuSpecs'])) {
            if (!empty($map['GpuSpecs'])) {
                $model->gpuSpecs = [];
                $n1 = 0;
                foreach ($map['GpuSpecs'] as $item1) {
                    $model->gpuSpecs[$n1] = gpuSpecs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TerminalConfig'])) {
            $model->terminalConfig = terminalConfig::fromMap($map['TerminalConfig']);
        }

        return $model;
    }
}

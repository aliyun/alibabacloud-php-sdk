<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewResponseBody\data\summaryConfig\callResultTagConfig;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewResponseBody\data\summaryConfig\mainPurpose;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryAiVoiceAgentDetailNewResponseBody\data\summaryConfig\outputTagConfig;

class summaryConfig extends Model
{
    /**
     * @var callResultTagConfig
     */
    public $callResultTagConfig;

    /**
     * @var mainPurpose
     */
    public $mainPurpose;

    /**
     * @var outputTagConfig[]
     */
    public $outputTagConfig;
    protected $_name = [
        'callResultTagConfig' => 'CallResultTagConfig',
        'mainPurpose' => 'MainPurpose',
        'outputTagConfig' => 'OutputTagConfig',
    ];

    public function validate()
    {
        if (null !== $this->callResultTagConfig) {
            $this->callResultTagConfig->validate();
        }
        if (null !== $this->mainPurpose) {
            $this->mainPurpose->validate();
        }
        if (\is_array($this->outputTagConfig)) {
            Model::validateArray($this->outputTagConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callResultTagConfig) {
            $res['CallResultTagConfig'] = null !== $this->callResultTagConfig ? $this->callResultTagConfig->toArray($noStream) : $this->callResultTagConfig;
        }

        if (null !== $this->mainPurpose) {
            $res['MainPurpose'] = null !== $this->mainPurpose ? $this->mainPurpose->toArray($noStream) : $this->mainPurpose;
        }

        if (null !== $this->outputTagConfig) {
            if (\is_array($this->outputTagConfig)) {
                $res['OutputTagConfig'] = [];
                $n1 = 0;
                foreach ($this->outputTagConfig as $item1) {
                    $res['OutputTagConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CallResultTagConfig'])) {
            $model->callResultTagConfig = callResultTagConfig::fromMap($map['CallResultTagConfig']);
        }

        if (isset($map['MainPurpose'])) {
            $model->mainPurpose = mainPurpose::fromMap($map['MainPurpose']);
        }

        if (isset($map['OutputTagConfig'])) {
            if (!empty($map['OutputTagConfig'])) {
                $model->outputTagConfig = [];
                $n1 = 0;
                foreach ($map['OutputTagConfig'] as $item1) {
                    $model->outputTagConfig[$n1] = outputTagConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

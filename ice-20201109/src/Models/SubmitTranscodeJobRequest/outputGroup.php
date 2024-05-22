<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest\outputGroup\output;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest\outputGroup\processConfig;
use AlibabaCloud\Tea\Model;

class outputGroup extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var output
     */
    public $output;

    /**
     * @description This parameter is required.
     *
     * @var processConfig
     */
    public $processConfig;
    protected $_name = [
        'output'        => 'Output',
        'processConfig' => 'ProcessConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->output) {
            $res['Output'] = null !== $this->output ? $this->output->toMap() : null;
        }
        if (null !== $this->processConfig) {
            $res['ProcessConfig'] = null !== $this->processConfig ? $this->processConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Output'])) {
            $model->output = output::fromMap($map['Output']);
        }
        if (isset($map['ProcessConfig'])) {
            $model->processConfig = processConfig::fromMap($map['ProcessConfig']);
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody\jobs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody\jobs\outputGroup\output;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody\jobs\outputGroup\processConfig;

class outputGroup extends Model
{
    /**
     * @var output
     */
    public $output;
    /**
     * @var processConfig
     */
    public $processConfig;
    protected $_name = [
        'output'        => 'Output',
        'processConfig' => 'ProcessConfig',
    ];

    public function validate()
    {
        if (null !== $this->output) {
            $this->output->validate();
        }
        if (null !== $this->processConfig) {
            $this->processConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->output) {
            $res['Output'] = null !== $this->output ? $this->output->toArray($noStream) : $this->output;
        }

        if (null !== $this->processConfig) {
            $res['ProcessConfig'] = null !== $this->processConfig ? $this->processConfig->toArray($noStream) : $this->processConfig;
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
        if (isset($map['Output'])) {
            $model->output = output::fromMap($map['Output']);
        }

        if (isset($map['ProcessConfig'])) {
            $model->processConfig = processConfig::fromMap($map['ProcessConfig']);
        }

        return $model;
    }
}

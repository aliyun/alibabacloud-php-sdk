<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class CodeInterpreterSessionConfig extends Model
{
    /**
     * @var string[]
     */
    public $environment;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $workingDirectory;
    protected $_name = [
        'environment' => 'environment',
        'timeout' => 'timeout',
        'workingDirectory' => 'workingDirectory',
    ];

    public function validate()
    {
        if (\is_array($this->environment)) {
            Model::validateArray($this->environment);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->environment) {
            if (\is_array($this->environment)) {
                $res['environment'] = [];
                foreach ($this->environment as $key1 => $value1) {
                    $res['environment'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }

        if (null !== $this->workingDirectory) {
            $res['workingDirectory'] = $this->workingDirectory;
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
        if (isset($map['environment'])) {
            if (!empty($map['environment'])) {
                $model->environment = [];
                foreach ($map['environment'] as $key1 => $value1) {
                    $model->environment[$key1] = $value1;
                }
            }
        }

        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        if (isset($map['workingDirectory'])) {
            $model->workingDirectory = $map['workingDirectory'];
        }

        return $model;
    }
}

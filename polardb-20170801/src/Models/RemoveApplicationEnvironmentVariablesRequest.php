<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class RemoveApplicationEnvironmentVariablesRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var bool
     */
    public $restart;

    /**
     * @var string[]
     */
    public $variableNames;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'restart' => 'Restart',
        'variableNames' => 'VariableNames',
    ];

    public function validate()
    {
        if (\is_array($this->variableNames)) {
            Model::validateArray($this->variableNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->restart) {
            $res['Restart'] = $this->restart;
        }

        if (null !== $this->variableNames) {
            if (\is_array($this->variableNames)) {
                $res['VariableNames'] = [];
                $n1 = 0;
                foreach ($this->variableNames as $item1) {
                    $res['VariableNames'][$n1] = $item1;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['Restart'])) {
            $model->restart = $map['Restart'];
        }

        if (isset($map['VariableNames'])) {
            if (!empty($map['VariableNames'])) {
                $model->variableNames = [];
                $n1 = 0;
                foreach ($map['VariableNames'] as $item1) {
                    $model->variableNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

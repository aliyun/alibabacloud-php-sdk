<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class UpdateApplicationEnvironmentVariablesRequest extends Model
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
     * @var mixed[]
     */
    public $variables;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'restart' => 'Restart',
        'variables' => 'Variables',
    ];

    public function validate()
    {
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
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

        if (null !== $this->variables) {
            if (\is_array($this->variables)) {
                $res['Variables'] = [];
                foreach ($this->variables as $key1 => $value1) {
                    $res['Variables'][$key1] = $value1;
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

        if (isset($map['Variables'])) {
            if (!empty($map['Variables'])) {
                $model->variables = [];
                foreach ($map['Variables'] as $key1 => $value1) {
                    $model->variables[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}

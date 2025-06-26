<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\JobDriver;

use AlibabaCloud\Dara\Model;

class sparkSubmit extends Model
{
    /**
     * @var string
     */
    public $entryPoint;

    /**
     * @var string[]
     */
    public $entryPointArguments;

    /**
     * @var string
     */
    public $sparkSubmitParameters;
    protected $_name = [
        'entryPoint' => 'entryPoint',
        'entryPointArguments' => 'entryPointArguments',
        'sparkSubmitParameters' => 'sparkSubmitParameters',
    ];

    public function validate()
    {
        if (\is_array($this->entryPointArguments)) {
            Model::validateArray($this->entryPointArguments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entryPoint) {
            $res['entryPoint'] = $this->entryPoint;
        }

        if (null !== $this->entryPointArguments) {
            if (\is_array($this->entryPointArguments)) {
                $res['entryPointArguments'] = [];
                $n1 = 0;
                foreach ($this->entryPointArguments as $item1) {
                    $res['entryPointArguments'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sparkSubmitParameters) {
            $res['sparkSubmitParameters'] = $this->sparkSubmitParameters;
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
        if (isset($map['entryPoint'])) {
            $model->entryPoint = $map['entryPoint'];
        }

        if (isset($map['entryPointArguments'])) {
            if (!empty($map['entryPointArguments'])) {
                $model->entryPointArguments = [];
                $n1 = 0;
                foreach ($map['entryPointArguments'] as $item1) {
                    $model->entryPointArguments[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['sparkSubmitParameters'])) {
            $model->sparkSubmitParameters = $map['sparkSubmitParameters'];
        }

        return $model;
    }
}

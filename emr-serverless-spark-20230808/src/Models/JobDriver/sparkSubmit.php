<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\JobDriver;

use AlibabaCloud\Tea\Model;

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
        'entryPoint'            => 'entryPoint',
        'entryPointArguments'   => 'entryPointArguments',
        'sparkSubmitParameters' => 'sparkSubmitParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entryPoint) {
            $res['entryPoint'] = $this->entryPoint;
        }
        if (null !== $this->entryPointArguments) {
            $res['entryPointArguments'] = $this->entryPointArguments;
        }
        if (null !== $this->sparkSubmitParameters) {
            $res['sparkSubmitParameters'] = $this->sparkSubmitParameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sparkSubmit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['entryPoint'])) {
            $model->entryPoint = $map['entryPoint'];
        }
        if (isset($map['entryPointArguments'])) {
            if (!empty($map['entryPointArguments'])) {
                $model->entryPointArguments = $map['entryPointArguments'];
            }
        }
        if (isset($map['sparkSubmitParameters'])) {
            $model->sparkSubmitParameters = $map['sparkSubmitParameters'];
        }

        return $model;
    }
}

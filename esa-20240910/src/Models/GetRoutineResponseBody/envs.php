<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRoutineResponseBody\envs\codeDeploy;

class envs extends Model
{
    /**
     * @var codeDeploy
     */
    public $codeDeploy;

    /**
     * @var string
     */
    public $env;
    protected $_name = [
        'codeDeploy' => 'CodeDeploy',
        'env' => 'Env',
    ];

    public function validate()
    {
        if (null !== $this->codeDeploy) {
            $this->codeDeploy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeDeploy) {
            $res['CodeDeploy'] = null !== $this->codeDeploy ? $this->codeDeploy->toArray($noStream) : $this->codeDeploy;
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
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
        if (isset($map['CodeDeploy'])) {
            $model->codeDeploy = codeDeploy::fromMap($map['CodeDeploy']);
        }

        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        return $model;
    }
}

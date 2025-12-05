<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PTS\V20201020\Models\SaveEnvRequest\env;

class SaveEnvRequest extends Model
{
    /**
     * @var env
     */
    public $env;
    protected $_name = [
        'env' => 'Env',
    ];

    public function validate()
    {
        if (null !== $this->env) {
            $this->env->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = null !== $this->env ? $this->env->toArray($noStream) : $this->env;
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
        if (isset($map['Env'])) {
            $model->env = env::fromMap($map['Env']);
        }

        return $model;
    }
}

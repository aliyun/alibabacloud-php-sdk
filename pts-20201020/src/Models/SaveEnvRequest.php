<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\SDK\PTS\V20201020\Models\SaveEnvRequest\env;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = null !== $this->env ? $this->env->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveEnvRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Env'])) {
            $model->env = env::fromMap($map['Env']);
        }

        return $model;
    }
}

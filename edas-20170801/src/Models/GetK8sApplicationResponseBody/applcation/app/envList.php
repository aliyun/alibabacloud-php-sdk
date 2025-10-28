<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\app;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\app\envList\env;

class envList extends Model
{
    /**
     * @var env[]
     */
    public $env;
    protected $_name = [
        'env' => 'Env',
    ];

    public function validate()
    {
        if (\is_array($this->env)) {
            Model::validateArray($this->env);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->env) {
            if (\is_array($this->env)) {
                $res['Env'] = [];
                $n1 = 0;
                foreach ($this->env as $item1) {
                    $res['Env'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Env'])) {
            if (!empty($map['Env'])) {
                $model->env = [];
                $n1 = 0;
                foreach ($map['Env'] as $item1) {
                    $model->env[$n1] = env::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

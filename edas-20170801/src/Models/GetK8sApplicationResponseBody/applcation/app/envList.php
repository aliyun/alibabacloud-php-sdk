<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\app;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\app\envList\env;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = [];
            if (null !== $this->env && \is_array($this->env)) {
                $n = 0;
                foreach ($this->env as $item) {
                    $res['Env'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return envList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Env'])) {
            if (!empty($map['Env'])) {
                $model->env = [];
                $n          = 0;
                foreach ($map['Env'] as $item) {
                    $model->env[$n++] = null !== $item ? env::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

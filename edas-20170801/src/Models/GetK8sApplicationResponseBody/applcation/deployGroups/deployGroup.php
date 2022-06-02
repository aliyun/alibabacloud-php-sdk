<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\deployGroups;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\deployGroups\deployGroup\components;
use AlibabaCloud\Tea\Model;

class deployGroup extends Model
{
    /**
     * @var components
     */
    public $components;

    /**
     * @var string
     */
    public $env;
    protected $_name = [
        'components' => 'Components',
        'env'        => 'Env',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->components) {
            $res['Components'] = null !== $this->components ? $this->components->toMap() : null;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deployGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Components'])) {
            $model->components = components::fromMap($map['Components']);
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        return $model;
    }
}

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
    protected $_name = [
        'components' => 'Components',
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

        return $model;
    }
}

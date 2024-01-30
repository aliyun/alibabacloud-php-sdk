<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\deployGroups\deployGroup\components;

use AlibabaCloud\Tea\Model;

class components extends Model
{
    /**
     * @description The component ID.
     *
     * @example 5
     *
     * @var string
     */
    public $componentId;

    /**
     * @description The keyword that is included in the component name.
     *
     * @example Open JDK 8
     *
     * @var string
     */
    public $componentKey;

    /**
     * @description The component type. Valid values:
     *
     * @example JDK
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'componentId'  => 'ComponentId',
        'componentKey' => 'ComponentKey',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentId) {
            $res['ComponentId'] = $this->componentId;
        }
        if (null !== $this->componentKey) {
            $res['ComponentKey'] = $this->componentKey;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return components
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentId'])) {
            $model->componentId = $map['ComponentId'];
        }
        if (isset($map['ComponentKey'])) {
            $model->componentKey = $map['ComponentKey'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}

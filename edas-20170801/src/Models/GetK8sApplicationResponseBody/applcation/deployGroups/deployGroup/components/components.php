<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\deployGroups\deployGroup\components;

use AlibabaCloud\Tea\Model;

class components extends Model
{
    /**
     * @var string
     */
    public $componentKey;

    /**
     * @var string
     */
    public $componentId;
    protected $_name = [
        'componentKey' => 'ComponentKey',
        'componentId'  => 'ComponentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentKey) {
            $res['ComponentKey'] = $this->componentKey;
        }
        if (null !== $this->componentId) {
            $res['ComponentId'] = $this->componentId;
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
        if (isset($map['ComponentKey'])) {
            $model->componentKey = $map['ComponentKey'];
        }
        if (isset($map['ComponentId'])) {
            $model->componentId = $map['ComponentId'];
        }

        return $model;
    }
}

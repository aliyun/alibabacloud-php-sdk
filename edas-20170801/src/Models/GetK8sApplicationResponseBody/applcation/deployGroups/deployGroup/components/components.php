<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sApplicationResponseBody\applcation\deployGroups\deployGroup\components;

use AlibabaCloud\Dara\Model;

class components extends Model
{
    /**
     * @var string
     */
    public $componentId;

    /**
     * @var string
     */
    public $componentKey;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'componentId' => 'ComponentId',
        'componentKey' => 'ComponentKey',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

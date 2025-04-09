<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateDictRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateDictRequest\files\ossObject;

class files extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var ossObject
     */
    public $ossObject;
    protected $_name = [
        'name' => 'name',
        'ossObject' => 'ossObject',
    ];

    public function validate()
    {
        if (null !== $this->ossObject) {
            $this->ossObject->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->ossObject) {
            $res['ossObject'] = null !== $this->ossObject ? $this->ossObject->toArray($noStream) : $this->ossObject;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['ossObject'])) {
            $model->ossObject = ossObject::fromMap($map['ossObject']);
        }

        return $model;
    }
}

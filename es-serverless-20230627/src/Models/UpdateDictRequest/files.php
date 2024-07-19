<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateDictRequest;

use AlibabaCloud\SDK\Esserverless\V20230627\Models\UpdateDictRequest\files\ossObject;
use AlibabaCloud\Tea\Model;

class files extends Model
{
    /**
     * @example dic_0.dic
     *
     * @var string
     */
    public $name;

    /**
     * @var ossObject
     */
    public $ossObject;
    protected $_name = [
        'name'      => 'name',
        'ossObject' => 'ossObject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->ossObject) {
            $res['ossObject'] = null !== $this->ossObject ? $this->ossObject->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return files
     */
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

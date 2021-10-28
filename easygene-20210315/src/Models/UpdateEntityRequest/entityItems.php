<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models\UpdateEntityRequest;

use AlibabaCloud\Tea\Model;

class entityItems extends Model
{
    /**
     * @var string[]
     */
    public $entityData;

    /**
     * @description 实体元素名称
     *
     * @var string
     */
    public $entityName;
    protected $_name = [
        'entityData' => 'EntityData',
        'entityName' => 'EntityName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityData) {
            $res['EntityData'] = $this->entityData;
        }
        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entityItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityData'])) {
            $model->entityData = $map['EntityData'];
        }
        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }

        return $model;
    }
}

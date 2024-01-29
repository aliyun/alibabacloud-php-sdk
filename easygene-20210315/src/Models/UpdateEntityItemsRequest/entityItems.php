<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models\UpdateEntityItemsRequest;

use AlibabaCloud\Tea\Model;

class entityItems extends Model
{
    /**
     * @var string[]
     */
    public $entityData;

    /**
     * @example s1
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

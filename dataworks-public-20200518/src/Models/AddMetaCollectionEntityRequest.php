<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class AddMetaCollectionEntityRequest extends Model
{
    /**
     * @description The unique identifier of the collection.
     *
     * This parameter is required.
     * @example album.2222
     *
     * @var string
     */
    public $collectionQualifiedName;

    /**
     * @description The unique identifier of the entity.
     *
     * This parameter is required.
     * @example maxcompute-table.projectA.tableB
     *
     * @var string
     */
    public $entityQualifiedName;

    /**
     * @description The remarks on the entity. Example: latest product table.
     *
     * @example this is a remark
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'collectionQualifiedName' => 'CollectionQualifiedName',
        'entityQualifiedName'     => 'EntityQualifiedName',
        'remark'                  => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collectionQualifiedName) {
            $res['CollectionQualifiedName'] = $this->collectionQualifiedName;
        }
        if (null !== $this->entityQualifiedName) {
            $res['EntityQualifiedName'] = $this->entityQualifiedName;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddMetaCollectionEntityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CollectionQualifiedName'])) {
            $model->collectionQualifiedName = $map['CollectionQualifiedName'];
        }
        if (isset($map['EntityQualifiedName'])) {
            $model->entityQualifiedName = $map['EntityQualifiedName'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteMetaCollectionEntityRequest extends Model
{
    /**
     * @description The unique identifier of the entity.
     *
     * This parameter is required.
     * @example album.12345
     *
     * @var string
     */
    public $collectionQualifiedName;

    /**
     * @description The ID of the request.
     *
     * This parameter is required.
     * @example maxcompute.projectA.tableB
     *
     * @var string
     */
    public $entityQualifiedName;
    protected $_name = [
        'collectionQualifiedName' => 'CollectionQualifiedName',
        'entityQualifiedName'     => 'EntityQualifiedName',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMetaCollectionEntityRequest
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

        return $model;
    }
}

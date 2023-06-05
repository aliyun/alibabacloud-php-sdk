<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class AddMetaCollectionEntityRequest extends Model
{
    /**
     * @description The unique identifier of the entity.
     *
     * Example: maxcompute-table.projectA.tableA.
     * @example album.2222
     *
     * @var string
     */
    public $collectionQualifiedName;

    /**
     * @description The ID of the request. You can use the ID to query logs and troubleshoot issues.
     *
     * @example maxcompute-table.projectA.tableB
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

        return $model;
    }
}

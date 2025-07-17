<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class RemoveEntityFromMetaCollectionRequest extends Model
{
    /**
     * @description The entity ID. Currently, entities can only be tables. You can call the ListTables operation to query the ID.
     *
     * @example dlf-table:123456789:test_catalog:test_database::test_table
     *
     * @var string
     */
    public $id;

    /**
     * @description The collection ID. You can call the ListMetaCollections operation to query the ID.
     *
     * @example category.123
     *
     * @var string
     */
    public $metaCollectionId;
    protected $_name = [
        'id' => 'Id',
        'metaCollectionId' => 'MetaCollectionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->metaCollectionId) {
            $res['MetaCollectionId'] = $this->metaCollectionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveEntityFromMetaCollectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MetaCollectionId'])) {
            $model->metaCollectionId = $map['MetaCollectionId'];
        }

        return $model;
    }
}

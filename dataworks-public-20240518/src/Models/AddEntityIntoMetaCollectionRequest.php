<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class AddEntityIntoMetaCollectionRequest extends Model
{
    /**
     * @description The entity ID. Currently, entities can only be tables. You can call the ListTables operation to query the ID.
     *
     * This parameter is required.
     *
     * @example maxcompute-table
     *
     * @var string
     */
    public $id;

    /**
     * @description The collection ID. You can call the ListMetaCollections operation to query the ID.
     *
     * This parameter is required.
     *
     * @example category.123
     *
     * @var string
     */
    public $metaCollectionId;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'id' => 'Id',
        'metaCollectionId' => 'MetaCollectionId',
        'remark' => 'Remark',
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
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddEntityIntoMetaCollectionRequest
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
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class AddMetaCollectionEntityRequest extends Model
{
    /**
     * @var string
     */
    public $collectionQualifiedName;

    /**
     * @var string
     */
    public $entityQualifiedName;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'collectionQualifiedName' => 'CollectionQualifiedName',
        'entityQualifiedName' => 'EntityQualifiedName',
        'remark' => 'Remark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

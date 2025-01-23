<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class CreateMetaCollectionRequest extends Model
{
    /**
     * @var string
     */
    public $collectionType;
    /**
     * @var string
     */
    public $comment;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $parentQualifiedName;
    protected $_name = [
        'collectionType'      => 'CollectionType',
        'comment'             => 'Comment',
        'name'                => 'Name',
        'parentQualifiedName' => 'ParentQualifiedName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collectionType) {
            $res['CollectionType'] = $this->collectionType;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->parentQualifiedName) {
            $res['ParentQualifiedName'] = $this->parentQualifiedName;
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
        if (isset($map['CollectionType'])) {
            $model->collectionType = $map['CollectionType'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ParentQualifiedName'])) {
            $model->parentQualifiedName = $map['ParentQualifiedName'];
        }

        return $model;
    }
}

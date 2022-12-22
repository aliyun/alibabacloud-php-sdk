<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateMetaCollectionRequest extends Model
{
    /**
     * @example ALBUM
     *
     * @var string
     */
    public $collectionType;

    /**
     * @example this is a comment
     *
     * @var string
     */
    public $comment;

    /**
     * @example collection_name
     *
     * @var string
     */
    public $name;

    /**
     * @example album.333508
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateMetaCollectionRequest
     */
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

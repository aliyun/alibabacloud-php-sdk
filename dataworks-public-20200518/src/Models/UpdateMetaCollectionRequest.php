<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateMetaCollectionRequest extends Model
{
    /**
     * @description The ID of the request. You can use the ID to query logs and troubleshoot issues.
     *
     * @example this is a comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description The comment of the collection.
     *
     * The comment must be 1 to 64 characters in length.
     * @example myCollectionName
     *
     * @var string
     */
    public $name;

    /**
     * @description The name of the collection.
     *
     * This parameter is required.
     * @example album.396397
     *
     * @var string
     */
    public $qualifiedName;
    protected $_name = [
        'comment'       => 'Comment',
        'name'          => 'Name',
        'qualifiedName' => 'QualifiedName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->qualifiedName) {
            $res['QualifiedName'] = $this->qualifiedName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMetaCollectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['QualifiedName'])) {
            $model->qualifiedName = $map['QualifiedName'];
        }

        return $model;
    }
}

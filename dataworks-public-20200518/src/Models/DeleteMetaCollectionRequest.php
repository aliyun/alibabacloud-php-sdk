<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteMetaCollectionRequest extends Model
{
    /**
     * @description The unique identifier of the collection.
     *
     * This parameter is required.
     * @example album.12333
     *
     * @var string
     */
    public $qualifiedName;
    protected $_name = [
        'qualifiedName' => 'QualifiedName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qualifiedName) {
            $res['QualifiedName'] = $this->qualifiedName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMetaCollectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QualifiedName'])) {
            $model->qualifiedName = $map['QualifiedName'];
        }

        return $model;
    }
}

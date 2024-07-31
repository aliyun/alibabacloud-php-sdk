<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class RemoveEntityTagsRequest extends Model
{
    /**
     * @description The unique identifier of the entity. Example: maxcompute-table.projectA.tableA.
     *
     * This parameter is required.
     * @example maxcompute-table.projectA.tableA
     *
     * @var string
     */
    public $qualifiedName;

    /**
     * @description The tag keys.
     *
     * This parameter is required.
     * @var string[]
     */
    public $tagKeys;
    protected $_name = [
        'qualifiedName' => 'QualifiedName',
        'tagKeys'       => 'TagKeys',
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
        if (null !== $this->tagKeys) {
            $res['TagKeys'] = $this->tagKeys;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveEntityTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QualifiedName'])) {
            $model->qualifiedName = $map['QualifiedName'];
        }
        if (isset($map['TagKeys'])) {
            if (!empty($map['TagKeys'])) {
                $model->tagKeys = $map['TagKeys'];
            }
        }

        return $model;
    }
}

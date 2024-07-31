<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class SetEntityTagsShrinkRequest extends Model
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
     * @description The tags.
     *
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'qualifiedName' => 'QualifiedName',
        'tagsShrink'    => 'Tags',
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
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetEntityTagsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QualifiedName'])) {
            $model->qualifiedName = $map['QualifiedName'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}

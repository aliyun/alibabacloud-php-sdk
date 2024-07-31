<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class SetEntityTagsRequest extends Model
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
     * @var UserEntityTag[]
     */
    public $tags;
    protected $_name = [
        'qualifiedName' => 'QualifiedName',
        'tags'          => 'Tags',
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
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetEntityTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QualifiedName'])) {
            $model->qualifiedName = $map['QualifiedName'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? UserEntityTag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

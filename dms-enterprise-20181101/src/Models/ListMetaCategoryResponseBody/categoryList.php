<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListMetaCategoryResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\MetaCategory;
use AlibabaCloud\Tea\Model;

class categoryList extends Model
{
    /**
     * @var MetaCategory[]
     */
    public $metaCategory;
    protected $_name = [
        'metaCategory' => 'MetaCategory',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->metaCategory) {
            $res['MetaCategory'] = [];
            if (null !== $this->metaCategory && \is_array($this->metaCategory)) {
                $n = 0;
                foreach ($this->metaCategory as $item) {
                    $res['MetaCategory'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return categoryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetaCategory'])) {
            if (!empty($map['MetaCategory'])) {
                $model->metaCategory = [];
                $n = 0;
                foreach ($map['MetaCategory'] as $item) {
                    $model->metaCategory[$n++] = null !== $item ? MetaCategory::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

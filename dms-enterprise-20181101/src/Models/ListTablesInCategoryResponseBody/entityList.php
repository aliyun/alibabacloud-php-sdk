<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTablesInCategoryResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\MetaCategoryTableEntity;
use AlibabaCloud\Tea\Model;

class entityList extends Model
{
    /**
     * @var MetaCategoryTableEntity[]
     */
    public $metaCategoryTableEntity;
    protected $_name = [
        'metaCategoryTableEntity' => 'MetaCategoryTableEntity',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->metaCategoryTableEntity) {
            $res['MetaCategoryTableEntity'] = [];
            if (null !== $this->metaCategoryTableEntity && \is_array($this->metaCategoryTableEntity)) {
                $n = 0;
                foreach ($this->metaCategoryTableEntity as $item) {
                    $res['MetaCategoryTableEntity'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetaCategoryTableEntity'])) {
            if (!empty($map['MetaCategoryTableEntity'])) {
                $model->metaCategoryTableEntity = [];
                $n = 0;
                foreach ($map['MetaCategoryTableEntity'] as $item) {
                    $model->metaCategoryTableEntity[$n++] = null !== $item ? MetaCategoryTableEntity::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

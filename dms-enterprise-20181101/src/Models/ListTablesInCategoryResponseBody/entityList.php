<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTablesInCategoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\MetaCategoryTableEntity;

class entityList extends Model
{
    /**
     * @var MetaCategoryTableEntity[]
     */
    public $metaCategoryTableEntity;
    protected $_name = [
        'metaCategoryTableEntity' => 'MetaCategoryTableEntity',
    ];

    public function validate()
    {
        if (\is_array($this->metaCategoryTableEntity)) {
            Model::validateArray($this->metaCategoryTableEntity);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metaCategoryTableEntity) {
            if (\is_array($this->metaCategoryTableEntity)) {
                $res['MetaCategoryTableEntity'] = [];
                $n1 = 0;
                foreach ($this->metaCategoryTableEntity as $item1) {
                    $res['MetaCategoryTableEntity'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['MetaCategoryTableEntity'])) {
            if (!empty($map['MetaCategoryTableEntity'])) {
                $model->metaCategoryTableEntity = [];
                $n1 = 0;
                foreach ($map['MetaCategoryTableEntity'] as $item1) {
                    $model->metaCategoryTableEntity[$n1] = MetaCategoryTableEntity::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

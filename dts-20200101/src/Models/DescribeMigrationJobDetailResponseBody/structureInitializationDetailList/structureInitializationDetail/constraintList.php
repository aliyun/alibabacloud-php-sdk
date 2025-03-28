<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobDetailResponseBody\structureInitializationDetailList\structureInitializationDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeMigrationJobDetailResponseBody\structureInitializationDetailList\structureInitializationDetail\constraintList\structureInitializationDetail;

class constraintList extends Model
{
    /**
     * @var structureInitializationDetail[]
     */
    public $structureInitializationDetail;
    protected $_name = [
        'structureInitializationDetail' => 'StructureInitializationDetail',
    ];

    public function validate()
    {
        if (\is_array($this->structureInitializationDetail)) {
            Model::validateArray($this->structureInitializationDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->structureInitializationDetail) {
            if (\is_array($this->structureInitializationDetail)) {
                $res['StructureInitializationDetail'] = [];
                $n1 = 0;
                foreach ($this->structureInitializationDetail as $item1) {
                    $res['StructureInitializationDetail'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['StructureInitializationDetail'])) {
            if (!empty($map['StructureInitializationDetail'])) {
                $model->structureInitializationDetail = [];
                $n1 = 0;
                foreach ($map['StructureInitializationDetail'] as $item1) {
                    $model->structureInitializationDetail[$n1++] = structureInitializationDetail::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

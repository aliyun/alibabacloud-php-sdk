<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20160801\Models\DescribeMigrationJobDetailResponseBody;

use AlibabaCloud\SDK\Dts\V20160801\Models\DescribeMigrationJobDetailResponseBody\structureInitializationDetailList\structureInitializationDetail;
use AlibabaCloud\Tea\Model;

class structureInitializationDetailList extends Model
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->structureInitializationDetail) {
            $res['StructureInitializationDetail'] = [];
            if (null !== $this->structureInitializationDetail && \is_array($this->structureInitializationDetail)) {
                $n = 0;
                foreach ($this->structureInitializationDetail as $item) {
                    $res['StructureInitializationDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return structureInitializationDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StructureInitializationDetail'])) {
            if (!empty($map['StructureInitializationDetail'])) {
                $model->structureInitializationDetail = [];
                $n                                    = 0;
                foreach ($map['StructureInitializationDetail'] as $item) {
                    $model->structureInitializationDetail[$n++] = null !== $item ? structureInitializationDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

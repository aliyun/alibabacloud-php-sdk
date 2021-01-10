<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderDetailInnerResponseBody\model\order;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderDetailInnerResponseBody\model\order\fundStructureModels\fundStructure;
use AlibabaCloud\Tea\Model;

class fundStructureModels extends Model
{
    /**
     * @var fundStructure[]
     */
    public $fundStructure;
    protected $_name = [
        'fundStructure' => 'FundStructure',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fundStructure) {
            $res['FundStructure'] = [];
            if (null !== $this->fundStructure && \is_array($this->fundStructure)) {
                $n = 0;
                foreach ($this->fundStructure as $item) {
                    $res['FundStructure'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fundStructureModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FundStructure'])) {
            if (!empty($map['FundStructure'])) {
                $model->fundStructure = [];
                $n                    = 0;
                foreach ($map['FundStructure'] as $item) {
                    $model->fundStructure[$n++] = null !== $item ? fundStructure::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

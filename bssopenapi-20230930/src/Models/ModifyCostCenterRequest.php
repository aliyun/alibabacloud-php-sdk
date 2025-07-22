<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ModifyCostCenterRequest\costCenterEntityList;
use AlibabaCloud\Tea\Model;

class ModifyCostCenterRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var costCenterEntityList[]
     */
    public $costCenterEntityList;

    /**
     * @example 2684201000001
     *
     * @var string
     */
    public $nbid;
    protected $_name = [
        'costCenterEntityList' => 'CostCenterEntityList',
        'nbid' => 'Nbid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->costCenterEntityList) {
            $res['CostCenterEntityList'] = [];
            if (null !== $this->costCenterEntityList && \is_array($this->costCenterEntityList)) {
                $n = 0;
                foreach ($this->costCenterEntityList as $item) {
                    $res['CostCenterEntityList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCostCenterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CostCenterEntityList'])) {
            if (!empty($map['CostCenterEntityList'])) {
                $model->costCenterEntityList = [];
                $n = 0;
                foreach ($map['CostCenterEntityList'] as $item) {
                    $model->costCenterEntityList[$n++] = null !== $item ? costCenterEntityList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }

        return $model;
    }
}

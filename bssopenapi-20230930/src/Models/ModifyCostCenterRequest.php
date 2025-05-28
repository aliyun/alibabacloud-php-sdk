<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ModifyCostCenterRequest\costCenterEntityList;

class ModifyCostCenterRequest extends Model
{
    /**
     * @var costCenterEntityList[]
     */
    public $costCenterEntityList;

    /**
     * @var string
     */
    public $nbid;
    protected $_name = [
        'costCenterEntityList' => 'CostCenterEntityList',
        'nbid' => 'Nbid',
    ];

    public function validate()
    {
        if (\is_array($this->costCenterEntityList)) {
            Model::validateArray($this->costCenterEntityList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costCenterEntityList) {
            if (\is_array($this->costCenterEntityList)) {
                $res['CostCenterEntityList'] = [];
                $n1 = 0;
                foreach ($this->costCenterEntityList as $item1) {
                    $res['CostCenterEntityList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
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
        if (isset($map['CostCenterEntityList'])) {
            if (!empty($map['CostCenterEntityList'])) {
                $model->costCenterEntityList = [];
                $n1 = 0;
                foreach ($map['CostCenterEntityList'] as $item1) {
                    $model->costCenterEntityList[$n1++] = costCenterEntityList::fromMap($item1);
                }
            }
        }

        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }

        return $model;
    }
}

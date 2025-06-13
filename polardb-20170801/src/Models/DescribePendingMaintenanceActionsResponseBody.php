<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePendingMaintenanceActionsResponseBody\typeList;

class DescribePendingMaintenanceActionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var typeList[]
     */
    public $typeList;
    protected $_name = [
        'requestId' => 'RequestId',
        'typeList' => 'TypeList',
    ];

    public function validate()
    {
        if (\is_array($this->typeList)) {
            Model::validateArray($this->typeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->typeList) {
            if (\is_array($this->typeList)) {
                $res['TypeList'] = [];
                $n1 = 0;
                foreach ($this->typeList as $item1) {
                    $res['TypeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TypeList'])) {
            if (!empty($map['TypeList'])) {
                $model->typeList = [];
                $n1 = 0;
                foreach ($map['TypeList'] as $item1) {
                    $model->typeList[$n1] = typeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}

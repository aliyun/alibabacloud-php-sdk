<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateCostCenterResponseBody\costCenterDtoList;

class CreateCostCenterResponseBody extends Model
{
    /**
     * @var costCenterDtoList[]
     */
    public $costCenterDtoList;

    /**
     * @var mixed
     */
    public $metadata;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'costCenterDtoList' => 'CostCenterDtoList',
        'metadata' => 'Metadata',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->costCenterDtoList)) {
            Model::validateArray($this->costCenterDtoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costCenterDtoList) {
            if (\is_array($this->costCenterDtoList)) {
                $res['CostCenterDtoList'] = [];
                $n1 = 0;
                foreach ($this->costCenterDtoList as $item1) {
                    $res['CostCenterDtoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CostCenterDtoList'])) {
            if (!empty($map['CostCenterDtoList'])) {
                $model->costCenterDtoList = [];
                $n1 = 0;
                foreach ($map['CostCenterDtoList'] as $item1) {
                    $model->costCenterDtoList[$n1++] = costCenterDtoList::fromMap($item1);
                }
            }
        }

        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

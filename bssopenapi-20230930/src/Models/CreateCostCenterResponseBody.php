<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateCostCenterResponseBody\costCenterDtoList;
use AlibabaCloud\Tea\Model;

class CreateCostCenterResponseBody extends Model
{
    /**
     * @var costCenterDtoList[]
     */
    public $costCenterDtoList;

    /**
     * @example {}
     *
     * @var mixed
     */
    public $metadata;

    /**
     * @example C1BD134E-D914-6AE0-1901-AEB2A99FA205
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'costCenterDtoList' => 'CostCenterDtoList',
        'metadata' => 'Metadata',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->costCenterDtoList) {
            $res['CostCenterDtoList'] = [];
            if (null !== $this->costCenterDtoList && \is_array($this->costCenterDtoList)) {
                $n = 0;
                foreach ($this->costCenterDtoList as $item) {
                    $res['CostCenterDtoList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return CreateCostCenterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CostCenterDtoList'])) {
            if (!empty($map['CostCenterDtoList'])) {
                $model->costCenterDtoList = [];
                $n = 0;
                foreach ($map['CostCenterDtoList'] as $item) {
                    $model->costCenterDtoList[$n++] = null !== $item ? costCenterDtoList::fromMap($item) : $item;
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

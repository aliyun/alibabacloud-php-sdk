<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAutoRenewAttributeResponseBody\instanceRenewAttributes;
use AlibabaCloud\Tea\Model;

class DescribeInstanceAutoRenewAttributeResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var instanceRenewAttributes[]
     */
    public $instanceRenewAttributes;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'totalCount'              => 'TotalCount',
        'instanceRenewAttributes' => 'InstanceRenewAttributes',
        'requestId'               => 'RequestId',
        'pageSize'                => 'PageSize',
        'pageNumber'              => 'PageNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->instanceRenewAttributes) {
            $res['InstanceRenewAttributes'] = [];
            if (null !== $this->instanceRenewAttributes && \is_array($this->instanceRenewAttributes)) {
                $n = 0;
                foreach ($this->instanceRenewAttributes as $item) {
                    $res['InstanceRenewAttributes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceAutoRenewAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['InstanceRenewAttributes'])) {
            if (!empty($map['InstanceRenewAttributes'])) {
                $model->instanceRenewAttributes = [];
                $n                              = 0;
                foreach ($map['InstanceRenewAttributes'] as $item) {
                    $model->instanceRenewAttributes[$n++] = null !== $item ? instanceRenewAttributes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeActiveOperationTaskTypeResponseBody\typeList;
use AlibabaCloud\Tea\Model;

class DescribeActiveOperationTaskTypeResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example C7EE83BF-7BA8-5087-BAC9-ED85ED54****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of tasks.
     *
     * @var typeList[]
     */
    public $typeList;
    protected $_name = [
        'requestId' => 'RequestId',
        'typeList'  => 'TypeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->typeList) {
            $res['TypeList'] = [];
            if (null !== $this->typeList && \is_array($this->typeList)) {
                $n = 0;
                foreach ($this->typeList as $item) {
                    $res['TypeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeActiveOperationTaskTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TypeList'])) {
            if (!empty($map['TypeList'])) {
                $model->typeList = [];
                $n               = 0;
                foreach ($map['TypeList'] as $item) {
                    $model->typeList[$n++] = null !== $item ? typeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

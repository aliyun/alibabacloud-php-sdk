<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\SDK\HBase\V20190101\Models\DescribeActiveOperationTaskTypeResponseBody\typeList;
use AlibabaCloud\Tea\Model;

class DescribeActiveOperationTaskTypeResponseBody extends Model
{
    /**
     * @example EC7E27FC-58F8-4722-89CF-D1B6B0971956
     *
     * @var string
     */
    public $requestId;

    /**
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOpenApiUsageResponseBody\openApiUsageList;
use AlibabaCloud\Tea\Model;

class DescribeOpenApiUsageResponseBody extends Model
{
    /**
     * @var openApiUsageList[]
     */
    public $openApiUsageList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'openApiUsageList' => 'OpenApiUsageList',
        'requestId'        => 'RequestId',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->openApiUsageList) {
            $res['OpenApiUsageList'] = [];
            if (null !== $this->openApiUsageList && \is_array($this->openApiUsageList)) {
                $n = 0;
                foreach ($this->openApiUsageList as $item) {
                    $res['OpenApiUsageList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOpenApiUsageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpenApiUsageList'])) {
            if (!empty($map['OpenApiUsageList'])) {
                $model->openApiUsageList = [];
                $n                       = 0;
                foreach ($map['OpenApiUsageList'] as $item) {
                    $model->openApiUsageList[$n++] = null !== $item ? openApiUsageList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

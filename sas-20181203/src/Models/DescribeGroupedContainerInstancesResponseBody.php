<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedContainerInstancesResponseBody\groupedContainerInstanceList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedContainerInstancesResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeGroupedContainerInstancesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var groupedContainerInstanceList[]
     */
    public $groupedContainerInstanceList;
    protected $_name = [
        'requestId'                    => 'RequestId',
        'pageInfo'                     => 'PageInfo',
        'groupedContainerInstanceList' => 'GroupedContainerInstanceList',
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
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->groupedContainerInstanceList) {
            $res['GroupedContainerInstanceList'] = [];
            if (null !== $this->groupedContainerInstanceList && \is_array($this->groupedContainerInstanceList)) {
                $n = 0;
                foreach ($this->groupedContainerInstanceList as $item) {
                    $res['GroupedContainerInstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGroupedContainerInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['GroupedContainerInstanceList'])) {
            if (!empty($map['GroupedContainerInstanceList'])) {
                $model->groupedContainerInstanceList = [];
                $n                                   = 0;
                foreach ($map['GroupedContainerInstanceList'] as $item) {
                    $model->groupedContainerInstanceList[$n++] = null !== $item ? groupedContainerInstanceList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

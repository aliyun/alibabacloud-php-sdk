<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedContainerInstancesResponseBody\groupedContainerInstanceList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedContainerInstancesResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeGroupedContainerInstancesResponseBody extends Model
{
    /**
     * @var groupedContainerInstanceList[]
     */
    public $groupedContainerInstanceList;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groupedContainerInstanceList' => 'GroupedContainerInstanceList',
        'pageInfo'                     => 'PageInfo',
        'requestId'                    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupedContainerInstanceList) {
            $res['GroupedContainerInstanceList'] = [];
            if (null !== $this->groupedContainerInstanceList && \is_array($this->groupedContainerInstanceList)) {
                $n = 0;
                foreach ($this->groupedContainerInstanceList as $item) {
                    $res['GroupedContainerInstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['GroupedContainerInstanceList'])) {
            if (!empty($map['GroupedContainerInstanceList'])) {
                $model->groupedContainerInstanceList = [];
                $n                                   = 0;
                foreach ($map['GroupedContainerInstanceList'] as $item) {
                    $model->groupedContainerInstanceList[$n++] = null !== $item ? groupedContainerInstanceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

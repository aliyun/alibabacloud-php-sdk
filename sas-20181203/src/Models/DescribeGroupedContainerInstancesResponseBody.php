<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedContainerInstancesResponseBody\groupedContainerInstanceList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedContainerInstancesResponseBody\pageInfo;

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
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->groupedContainerInstanceList)) {
            Model::validateArray($this->groupedContainerInstanceList);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupedContainerInstanceList) {
            if (\is_array($this->groupedContainerInstanceList)) {
                $res['GroupedContainerInstanceList'] = [];
                $n1 = 0;
                foreach ($this->groupedContainerInstanceList as $item1) {
                    $res['GroupedContainerInstanceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
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
        if (isset($map['GroupedContainerInstanceList'])) {
            if (!empty($map['GroupedContainerInstanceList'])) {
                $model->groupedContainerInstanceList = [];
                $n1 = 0;
                foreach ($map['GroupedContainerInstanceList'] as $item1) {
                    $model->groupedContainerInstanceList[$n1] = groupedContainerInstanceList::fromMap($item1);
                    ++$n1;
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

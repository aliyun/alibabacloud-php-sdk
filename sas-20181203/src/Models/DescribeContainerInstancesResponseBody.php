<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerInstancesResponseBody\containerInstanceList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerInstancesResponseBody\pageInfo;

class DescribeContainerInstancesResponseBody extends Model
{
    /**
     * @var containerInstanceList[]
     */
    public $containerInstanceList;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'containerInstanceList' => 'ContainerInstanceList',
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->containerInstanceList)) {
            Model::validateArray($this->containerInstanceList);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containerInstanceList) {
            if (\is_array($this->containerInstanceList)) {
                $res['ContainerInstanceList'] = [];
                $n1 = 0;
                foreach ($this->containerInstanceList as $item1) {
                    $res['ContainerInstanceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ContainerInstanceList'])) {
            if (!empty($map['ContainerInstanceList'])) {
                $model->containerInstanceList = [];
                $n1 = 0;
                foreach ($map['ContainerInstanceList'] as $item1) {
                    $model->containerInstanceList[$n1] = containerInstanceList::fromMap($item1);
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

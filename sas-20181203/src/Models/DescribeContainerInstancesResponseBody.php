<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerInstancesResponseBody\containerInstanceList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeContainerInstancesResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeContainerInstancesResponseBody extends Model
{
    /**
     * @description An array that consists of the information about containers.
     *
     * @var containerInstanceList[]
     */
    public $containerInstanceList;

    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 79CFF74D-E967-5407-8A78-EE03B925FDAA
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'containerInstanceList' => 'ContainerInstanceList',
        'pageInfo'              => 'PageInfo',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerInstanceList) {
            $res['ContainerInstanceList'] = [];
            if (null !== $this->containerInstanceList && \is_array($this->containerInstanceList)) {
                $n = 0;
                foreach ($this->containerInstanceList as $item) {
                    $res['ContainerInstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeContainerInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerInstanceList'])) {
            if (!empty($map['ContainerInstanceList'])) {
                $model->containerInstanceList = [];
                $n                            = 0;
                foreach ($map['ContainerInstanceList'] as $item) {
                    $model->containerInstanceList[$n++] = null !== $item ? containerInstanceList::fromMap($item) : $item;
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

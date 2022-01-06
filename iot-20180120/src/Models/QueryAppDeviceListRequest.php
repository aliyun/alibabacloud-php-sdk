<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryAppDeviceListRequest\tagList;
use AlibabaCloud\Tea\Model;

class QueryAppDeviceListRequest extends Model
{
    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string[]
     */
    public $categoryKeyList;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $productKeyList;

    /**
     * @var tagList[]
     */
    public $tagList;
    protected $_name = [
        'appKey'          => 'AppKey',
        'categoryKeyList' => 'CategoryKeyList',
        'currentPage'     => 'CurrentPage',
        'iotInstanceId'   => 'IotInstanceId',
        'pageSize'        => 'PageSize',
        'productKeyList'  => 'ProductKeyList',
        'tagList'         => 'TagList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->categoryKeyList) {
            $res['CategoryKeyList'] = $this->categoryKeyList;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productKeyList) {
            $res['ProductKeyList'] = $this->productKeyList;
        }
        if (null !== $this->tagList) {
            $res['TagList'] = [];
            if (null !== $this->tagList && \is_array($this->tagList)) {
                $n = 0;
                foreach ($this->tagList as $item) {
                    $res['TagList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAppDeviceListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['CategoryKeyList'])) {
            if (!empty($map['CategoryKeyList'])) {
                $model->categoryKeyList = $map['CategoryKeyList'];
            }
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductKeyList'])) {
            if (!empty($map['ProductKeyList'])) {
                $model->productKeyList = $map['ProductKeyList'];
            }
        }
        if (isset($map['TagList'])) {
            if (!empty($map['TagList'])) {
                $model->tagList = [];
                $n              = 0;
                foreach ($map['TagList'] as $item) {
                    $model->tagList[$n++] = null !== $item ? tagList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

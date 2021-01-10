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
    public $apiProduct;

    /**
     * @var string
     */
    public $apiRevision;

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
     * @var string[]
     */
    public $categoryKeyList;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var tagList[]
     */
    public $tagList;

    /**
     * @var int
     */
    public $currentPage;
    protected $_name = [
        'apiProduct'      => 'ApiProduct',
        'apiRevision'     => 'ApiRevision',
        'iotInstanceId'   => 'IotInstanceId',
        'pageSize'        => 'PageSize',
        'productKeyList'  => 'ProductKeyList',
        'categoryKeyList' => 'CategoryKeyList',
        'appKey'          => 'AppKey',
        'tagList'         => 'TagList',
        'currentPage'     => 'CurrentPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->apiRevision) {
            $res['ApiRevision'] = $this->apiRevision;
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
        if (null !== $this->categoryKeyList) {
            $res['CategoryKeyList'] = $this->categoryKeyList;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
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
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
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
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
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
        if (isset($map['CategoryKeyList'])) {
            if (!empty($map['CategoryKeyList'])) {
                $model->categoryKeyList = $map['CategoryKeyList'];
            }
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\ListProductByTagsRequest\productTag;
use AlibabaCloud\Tea\Model;

class ListProductByTagsRequest extends Model
{
    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The ID of the instance. You can view the instance **ID** on the **Overview** page in the IoT Platform console.
     *
     *
     *
     * >*   If your instance has an ID, you must configure this parameter. If you do not set this parameter, the call fails.
     * >*   If your instance has no **Overview** page or ID, you do not need to set this parameter.
     *
     * For more information, see [Overview](~~356505~~).
     * @example iot-v64***
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @description The number of entries to return on each page. Maximum value: 50.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var productTag[]
     */
    public $productTag;
    protected $_name = [
        'currentPage'   => 'CurrentPage',
        'iotInstanceId' => 'IotInstanceId',
        'pageSize'      => 'PageSize',
        'productTag'    => 'ProductTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productTag) {
            $res['ProductTag'] = [];
            if (null !== $this->productTag && \is_array($this->productTag)) {
                $n = 0;
                foreach ($this->productTag as $item) {
                    $res['ProductTag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProductByTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductTag'])) {
            if (!empty($map['ProductTag'])) {
                $model->productTag = [];
                $n                 = 0;
                foreach ($map['ProductTag'] as $item) {
                    $model->productTag[$n++] = null !== $item ? productTag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

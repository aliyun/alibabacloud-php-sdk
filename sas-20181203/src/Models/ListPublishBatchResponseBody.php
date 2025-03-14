<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListPublishBatchResponseBody\batchList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListPublishBatchResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class ListPublishBatchResponseBody extends Model
{
    /**
     * @description The information about the release batches.
     *
     * @var batchList[]
     */
    public $batchList;

    /**
     * @description The page information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The request ID.
     *
     * @example 7532B7EE-7CE7-5F4D-BF04-B12447DDCAE1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'batchList' => 'BatchList',
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchList) {
            $res['BatchList'] = [];
            if (null !== $this->batchList && \is_array($this->batchList)) {
                $n = 0;
                foreach ($this->batchList as $item) {
                    $res['BatchList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListPublishBatchResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchList'])) {
            if (!empty($map['BatchList'])) {
                $model->batchList = [];
                $n = 0;
                foreach ($map['BatchList'] as $item) {
                    $model->batchList[$n++] = null !== $item ? batchList::fromMap($item) : $item;
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

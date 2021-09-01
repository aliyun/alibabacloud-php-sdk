<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryActivityItemsResponseBody\lmActivityItemModelList;
use AlibabaCloud\Tea\Model;

class QueryActivityItemsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var lmActivityItemModelList
     */
    public $lmActivityItemModelList;
    protected $_name = [
        'requestId'               => 'RequestId',
        'code'                    => 'Code',
        'message'                 => 'Message',
        'pageNumber'              => 'PageNumber',
        'pageSize'                => 'PageSize',
        'totalCount'              => 'TotalCount',
        'lmActivityItemModelList' => 'LmActivityItemModelList',
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->lmActivityItemModelList) {
            $res['LmActivityItemModelList'] = null !== $this->lmActivityItemModelList ? $this->lmActivityItemModelList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryActivityItemsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['LmActivityItemModelList'])) {
            $model->lmActivityItemModelList = lmActivityItemModelList::fromMap($map['LmActivityItemModelList']);
        }

        return $model;
    }
}

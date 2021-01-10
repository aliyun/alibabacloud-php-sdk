<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUnfinishedSessionsResponseBody\lmActivitySessionModelList;
use AlibabaCloud\Tea\Model;

class QueryUnfinishedSessionsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var lmActivitySessionModelList
     */
    public $lmActivitySessionModelList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'totalCount'                 => 'TotalCount',
        'lmActivitySessionModelList' => 'LmActivitySessionModelList',
        'requestId'                  => 'RequestId',
        'message'                    => 'Message',
        'pageSize'                   => 'PageSize',
        'pageNumber'                 => 'PageNumber',
        'code'                       => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->lmActivitySessionModelList) {
            $res['LmActivitySessionModelList'] = null !== $this->lmActivitySessionModelList ? $this->lmActivitySessionModelList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryUnfinishedSessionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['LmActivitySessionModelList'])) {
            $model->lmActivitySessionModelList = lmActivitySessionModelList::fromMap($map['LmActivitySessionModelList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}

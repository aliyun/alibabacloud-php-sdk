<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUnfinishedActivitiesResponseBody\lmActivityModelExtList;
use AlibabaCloud\Tea\Model;

class QueryUnfinishedActivitiesResponseBody extends Model
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
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var lmActivityModelExtList
     */
    public $lmActivityModelExtList;
    protected $_name = [
        'requestId'              => 'RequestId',
        'code'                   => 'Code',
        'message'                => 'Message',
        'pageSize'               => 'PageSize',
        'pageNumber'             => 'PageNumber',
        'totalCount'             => 'TotalCount',
        'lmActivityModelExtList' => 'LmActivityModelExtList',
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->lmActivityModelExtList) {
            $res['LmActivityModelExtList'] = null !== $this->lmActivityModelExtList ? $this->lmActivityModelExtList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryUnfinishedActivitiesResponseBody
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
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['LmActivityModelExtList'])) {
            $model->lmActivityModelExtList = lmActivityModelExtList::fromMap($map['LmActivityModelExtList']);
        }

        return $model;
    }
}

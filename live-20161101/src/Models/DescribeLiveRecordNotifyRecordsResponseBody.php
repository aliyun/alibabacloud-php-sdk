<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordNotifyRecordsResponseBody\callbackList;
use AlibabaCloud\Tea\Model;

class DescribeLiveRecordNotifyRecordsResponseBody extends Model
{
    /**
     * @description The callback records.
     *
     * @var callbackList[]
     */
    public $callbackList;

    /**
     * @description The error code.
     *
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @description The returned message.
     *
     * @example ok
     *
     * @var string
     */
    public $msg;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example 180FA0D2-1A02-5158-A36B-115DBF7B218D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries that meet the specified conditions.
     *
     * @example 20
     *
     * @var int
     */
    public $totalNum;

    /**
     * @description The total number of pages.
     *
     * @example 20
     *
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'callbackList' => 'CallbackList',
        'code' => 'Code',
        'msg' => 'Msg',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalNum' => 'TotalNum',
        'totalPage' => 'TotalPage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackList) {
            $res['CallbackList'] = [];
            if (null !== $this->callbackList && \is_array($this->callbackList)) {
                $n = 0;
                foreach ($this->callbackList as $item) {
                    $res['CallbackList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveRecordNotifyRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackList'])) {
            if (!empty($map['CallbackList'])) {
                $model->callbackList = [];
                $n = 0;
                foreach ($map['CallbackList'] as $item) {
                    $model->callbackList[$n++] = null !== $item ? callbackList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        return $model;
    }
}

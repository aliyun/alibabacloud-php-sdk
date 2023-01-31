<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\SearchTaskResponseBody\searchTaskInfoList;
use AlibabaCloud\Tea\Model;

class SearchTaskResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @example 0
     *
     * @var int
     */
    public $pageIndex;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 254EB995-DEDF-48A4-9101-9CA5B72FFBCC
     *
     * @var string
     */
    public $requestId;

    /**
     * @example []
     *
     * @var searchTaskInfoList[]
     */
    public $searchTaskInfoList;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 2
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'code'               => 'Code',
        'httpStatusCode'     => 'HttpStatusCode',
        'message'            => 'Message',
        'pageIndex'          => 'PageIndex',
        'pageSize'           => 'PageSize',
        'requestId'          => 'RequestId',
        'searchTaskInfoList' => 'SearchTaskInfoList',
        'success'            => 'Success',
        'total'              => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->searchTaskInfoList) {
            $res['SearchTaskInfoList'] = [];
            if (null !== $this->searchTaskInfoList && \is_array($this->searchTaskInfoList)) {
                $n = 0;
                foreach ($this->searchTaskInfoList as $item) {
                    $res['SearchTaskInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SearchTaskInfoList'])) {
            if (!empty($map['SearchTaskInfoList'])) {
                $model->searchTaskInfoList = [];
                $n                         = 0;
                foreach ($map['SearchTaskInfoList'] as $item) {
                    $model->searchTaskInfoList[$n++] = null !== $item ? searchTaskInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}

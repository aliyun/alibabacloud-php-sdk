<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\SearchTableResponseBody\searchTableList;
use AlibabaCloud\Tea\Model;

class SearchTableResponseBody extends Model
{
    /**
     * @var searchTableList
     */
    public $searchTableList;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'searchTableList' => 'SearchTableList',
        'totalCount'      => 'TotalCount',
        'requestId'       => 'RequestId',
        'errorCode'       => 'ErrorCode',
        'errorMessage'    => 'ErrorMessage',
        'success'         => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->searchTableList) {
            $res['SearchTableList'] = null !== $this->searchTableList ? $this->searchTableList->toMap() : null;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchTableResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SearchTableList'])) {
            $model->searchTableList = searchTableList::fromMap($map['SearchTableList']);
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

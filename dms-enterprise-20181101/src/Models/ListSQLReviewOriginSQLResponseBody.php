<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSQLReviewOriginSQLResponseBody\originSQLList;
use AlibabaCloud\Tea\Model;

class ListSQLReviewOriginSQLResponseBody extends Model
{
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

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var originSQLList[]
     */
    public $originSQLList;
    protected $_name = [
        'requestId'     => 'RequestId',
        'errorCode'     => 'ErrorCode',
        'errorMessage'  => 'ErrorMessage',
        'success'       => 'Success',
        'totalCount'    => 'TotalCount',
        'originSQLList' => 'OriginSQLList',
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
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->originSQLList) {
            $res['OriginSQLList'] = [];
            if (null !== $this->originSQLList && \is_array($this->originSQLList)) {
                $n = 0;
                foreach ($this->originSQLList as $item) {
                    $res['OriginSQLList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSQLReviewOriginSQLResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['OriginSQLList'])) {
            if (!empty($map['OriginSQLList'])) {
                $model->originSQLList = [];
                $n                    = 0;
                foreach ($map['OriginSQLList'] as $item) {
                    $model->originSQLList[$n++] = null !== $item ? originSQLList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

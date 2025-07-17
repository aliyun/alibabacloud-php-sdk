<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListAbacAuthorizationsResponseBody\authorizationList;
use AlibabaCloud\Tea\Model;

class ListAbacAuthorizationsResponseBody extends Model
{
    /**
     * @var authorizationList[]
     */
    public $authorizationList;

    /**
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example 7FAD400F-7A5C-4193-8F9A-39D86C4F0231
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 3
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'authorizationList' => 'AuthorizationList',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationList) {
            $res['AuthorizationList'] = [];
            if (null !== $this->authorizationList && \is_array($this->authorizationList)) {
                $n = 0;
                foreach ($this->authorizationList as $item) {
                    $res['AuthorizationList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAbacAuthorizationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizationList'])) {
            if (!empty($map['AuthorizationList'])) {
                $model->authorizationList = [];
                $n = 0;
                foreach ($map['AuthorizationList'] as $item) {
                    $model->authorizationList[$n++] = null !== $item ? authorizationList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}

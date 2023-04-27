<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstanceUserPermissionsResponseBody\userPermissions;
use AlibabaCloud\Tea\Model;

class ListInstanceUserPermissionsResponseBody extends Model
{
    /**
     * @description The ID of the authorization record.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The number of entries to return on each page.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The operation that you want to perform. Set the value to **ListInstanceUserPermissions**.
     *
     * @example 7D162AAE-6501-5691-BF14-D7018F662895
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
     * @description The nickname of the user.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The error message.
     *
     * @var userPermissions
     */
    public $userPermissions;
    protected $_name = [
        'errorCode'       => 'ErrorCode',
        'errorMessage'    => 'ErrorMessage',
        'requestId'       => 'RequestId',
        'success'         => 'Success',
        'totalCount'      => 'TotalCount',
        'userPermissions' => 'UserPermissions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->userPermissions) {
            $res['UserPermissions'] = null !== $this->userPermissions ? $this->userPermissions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceUserPermissionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['UserPermissions'])) {
            $model->userPermissions = userPermissions::fromMap($map['UserPermissions']);
        }

        return $model;
    }
}

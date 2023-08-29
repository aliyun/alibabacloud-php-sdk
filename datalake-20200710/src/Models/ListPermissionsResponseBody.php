<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class ListPermissionsResponseBody extends Model
{
    /**
     * @description Response Code
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description Message Code
     *
     * @example .
     *
     * @var string
     */
    public $message;

    /**
     * @description NextPageToken
     *
     * @example token!
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @example []
     *
     * @var PrincipalResourcePermissions[]
     */
    public $principalResourcePermissionsList;

    /**
     * @description RequestId
     *
     * @example 745EAAE2-5010-5C9F-A95C-B8FC5C1B03BF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Success
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description TotalCount
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code'                             => 'Code',
        'message'                          => 'Message',
        'nextPageToken'                    => 'NextPageToken',
        'principalResourcePermissionsList' => 'PrincipalResourcePermissionsList',
        'requestId'                        => 'RequestId',
        'success'                          => 'Success',
        'totalCount'                       => 'TotalCount',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->principalResourcePermissionsList) {
            $res['PrincipalResourcePermissionsList'] = [];
            if (null !== $this->principalResourcePermissionsList && \is_array($this->principalResourcePermissionsList)) {
                $n = 0;
                foreach ($this->principalResourcePermissionsList as $item) {
                    $res['PrincipalResourcePermissionsList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ListPermissionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['PrincipalResourcePermissionsList'])) {
            if (!empty($map['PrincipalResourcePermissionsList'])) {
                $model->principalResourcePermissionsList = [];
                $n                                       = 0;
                foreach ($map['PrincipalResourcePermissionsList'] as $item) {
                    $model->principalResourcePermissionsList[$n++] = null !== $item ? PrincipalResourcePermissions::fromMap($item) : $item;
                }
            }
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

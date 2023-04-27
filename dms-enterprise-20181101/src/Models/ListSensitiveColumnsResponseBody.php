<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListSensitiveColumnsResponseBody\sensitiveColumnList;
use AlibabaCloud\Tea\Model;

class ListSensitiveColumnsResponseBody extends Model
{
    /**
     * @description The sensitivity level of the field. Valid values:
     *
     *   SENSITIVE
     *   CONFIDENTIAL
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The sensitive fields.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The number of sensitive fields.
     *
     * @example 09D82FD7-F87F-59EF-AA82-AEF71B09E306
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The type of the de-identification algorithm. Valid values:
     *
     *   DEFAULT: All characters are masked. This is the default value.
     *   FIX_POS: The characters at specific positions are masked.
     *   FIX_CHAR: Specific characters are masked.
     *
     * @var sensitiveColumnList
     */
    public $sensitiveColumnList;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The ID of the tenant.
     *
     * >  To view the ID of the tenant, move the pointer over the profile picture in the upper-right corner of the Data Management (DMS) console. For more information, see the "View information about the current tenant" section of the [Manage DMS tenants](~~181330~~) topic.
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'errorCode'           => 'ErrorCode',
        'errorMessage'        => 'ErrorMessage',
        'requestId'           => 'RequestId',
        'sensitiveColumnList' => 'SensitiveColumnList',
        'success'             => 'Success',
        'totalCount'          => 'TotalCount',
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
        if (null !== $this->sensitiveColumnList) {
            $res['SensitiveColumnList'] = null !== $this->sensitiveColumnList ? $this->sensitiveColumnList->toMap() : null;
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
     * @return ListSensitiveColumnsResponseBody
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
        if (isset($map['SensitiveColumnList'])) {
            $model->sensitiveColumnList = sensitiveColumnList::fromMap($map['SensitiveColumnList']);
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

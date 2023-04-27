<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataCorrectPreCheckDBResponseBody\preCheckDBList;
use AlibabaCloud\Tea\Model;

class ListDataCorrectPreCheckDBResponseBody extends Model
{
    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](~~198073~~) or [ListUserTenants](~~198074~~) operation to query the ID of the tenant.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The name of the database.
     *
     * @example UnknownError
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the request.
     *
     * @var preCheckDBList[]
     */
    public $preCheckDBList;

    /**
     * @description The ID of the ticket for the data change.
     *
     * @example 95A972AF-FAED-4768-9360-7C0DF5D594D0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of SQL statements.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'      => 'ErrorCode',
        'errorMessage'   => 'ErrorMessage',
        'preCheckDBList' => 'PreCheckDBList',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
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
        if (null !== $this->preCheckDBList) {
            $res['PreCheckDBList'] = [];
            if (null !== $this->preCheckDBList && \is_array($this->preCheckDBList)) {
                $n = 0;
                foreach ($this->preCheckDBList as $item) {
                    $res['PreCheckDBList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataCorrectPreCheckDBResponseBody
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
        if (isset($map['PreCheckDBList'])) {
            if (!empty($map['PreCheckDBList'])) {
                $model->preCheckDBList = [];
                $n                     = 0;
                foreach ($map['PreCheckDBList'] as $item) {
                    $model->preCheckDBList[$n++] = null !== $item ? preCheckDBList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

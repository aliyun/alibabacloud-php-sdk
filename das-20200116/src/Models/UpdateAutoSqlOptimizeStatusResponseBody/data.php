<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\UpdateAutoSqlOptimizeStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The error code. Valid values:
     *
     *   **-1001**: indicates that the specified parameter is invalid.
     *   **-91029**: indicates that a system error occurred.
     *
     * @example -1001
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message.
     *
     * @example invalid param
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description Indicates whether the request initiated to configure the automatic SQL optimization feature was successful. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorMsg'  => 'ErrorMsg',
        'success'   => 'Success',
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
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

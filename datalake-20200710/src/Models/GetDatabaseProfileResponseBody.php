<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class GetDatabaseProfileResponseBody extends Model
{
    /**
     * @description Code
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example {
     * }
     * @var DatabaseProfile
     */
    public $databaseProfile;

    /**
     * @description Message
     *
     * @var string
     */
    public $message;

    /**
     * @description RequestId
     *
     * @example AEA7DCC8-DBF5-561B-A7FD-0747D7D51FEB
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
    protected $_name = [
        'code'            => 'Code',
        'databaseProfile' => 'DatabaseProfile',
        'message'         => 'Message',
        'requestId'       => 'RequestId',
        'success'         => 'Success',
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
        if (null !== $this->databaseProfile) {
            $res['DatabaseProfile'] = null !== $this->databaseProfile ? $this->databaseProfile->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
     * @return GetDatabaseProfileResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DatabaseProfile'])) {
            $model->databaseProfile = DatabaseProfile::fromMap($map['DatabaseProfile']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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

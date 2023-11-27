<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ModifyHostsActiveAddressTypeResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description The return code that indicates whether the call was successful. Valid values:
     *
     *   **OK**: The call was successful.
     *   **UNEXPECTED**: An unknown error occurred.
     *   **INVALID_ARGUMENT**: A request parameter is invalid.
     *   **OBJECT_NOT_FOUND**: The specified object on which you want to perform the operation does not exist.
     *   **OBJECT_AlREADY_EXISTS**: The specified object on which you want to perform the operation already exists.
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The ID of the host.
     *
     * @example 1
     *
     * @var string
     */
    public $hostId;

    /**
     * @description This parameter is deprecated.
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'code'    => 'Code',
        'hostId'  => 'HostId',
        'message' => 'Message',
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
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}

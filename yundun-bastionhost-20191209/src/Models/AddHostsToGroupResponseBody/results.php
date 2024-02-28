<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AddHostsToGroupResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description The return code that indicates whether the call was successful. Valid values:
     *
     *   **OK**: The call was successful.
     *
     *   **UNEXPECTED**: An unknown error occurred.
     *
     *   **INVALID_ARGUMENT**: A request parameter is invalid.
     *
     * >Make sure that the request parameters are valid and call the operation again.
     *
     *   **OBJECT_NOT_FOUND**: The specified object on which you want to perform the operation does not exist.
     *
     * >Check whether the specified ID of the bastion host exists, whether the specified hosts exist, and whether the specified host IDs are valid. Then, call the operation again.
     *
     *   **OBJECT_AlREADY_EXISTS**: The specified object on which you want to perform the operation already exists.
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The ID of the host group.
     *
     * @example 1
     *
     * @var string
     */
    public $hostGroupId;

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
     * @example N/A
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'code'        => 'Code',
        'hostGroupId' => 'HostGroupId',
        'hostId'      => 'HostId',
        'message'     => 'Message',
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
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
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
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
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

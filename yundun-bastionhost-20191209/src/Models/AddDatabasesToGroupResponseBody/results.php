<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AddDatabasesToGroupResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description The error code returned. If **OK** is returned, the operation was successful. If another error code is returned, the operation failed.
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The database ID.
     *
     * @example 9
     *
     * @var string
     */
    public $databaseId;

    /**
     * @description The asset group ID.
     *
     * @example 1
     *
     * @var string
     */
    public $hostGroupId;

    /**
     * @description The error message returned.
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'code' => 'Code',
        'databaseId' => 'DatabaseId',
        'hostGroupId' => 'HostGroupId',
        'message' => 'Message',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
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
        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}

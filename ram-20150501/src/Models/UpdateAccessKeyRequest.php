<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class UpdateAccessKeyRequest extends Model
{
    /**
     * @description The status of the AccessKey pair. Valid values: `Active` and `Inactive`.
     *
     * @example Inactive
     *
     * @var string
     */
    public $status;

    /**
     * @description The AccessKey ID in the AccessKey pair whose status you want to change.
     *
     * @example 0wNEpMMlzy7s****
     *
     * @var string
     */
    public $userAccessKeyId;

    /**
     * @description The name of the RAM user.
     *
     * @example zhangq****
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'status'          => 'Status',
        'userAccessKeyId' => 'UserAccessKeyId',
        'userName'        => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userAccessKeyId) {
            $res['UserAccessKeyId'] = $this->userAccessKeyId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAccessKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserAccessKeyId'])) {
            $model->userAccessKeyId = $map['UserAccessKeyId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}

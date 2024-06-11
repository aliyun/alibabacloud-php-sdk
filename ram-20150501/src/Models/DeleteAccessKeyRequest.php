<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class DeleteAccessKeyRequest extends Model
{
    /**
     * @description The AccessKey ID in the AccessKey pair that you want to delete.
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
        'userAccessKeyId' => 'UserAccessKeyId',
        'userName'        => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return DeleteAccessKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserAccessKeyId'])) {
            $model->userAccessKeyId = $map['UserAccessKeyId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}

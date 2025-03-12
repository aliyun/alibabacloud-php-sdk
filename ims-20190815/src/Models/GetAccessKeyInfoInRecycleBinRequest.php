<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class GetAccessKeyInfoInRecycleBinRequest extends Model
{
    /**
     * @description The AccessKey ID of the Resource Access Management (RAM) user.
     *
     * This parameter is required.
     * @example LTAI4GFTgcR8m8cZQDTH****
     *
     * @var string
     */
    public $userAccessKeyId;
    protected $_name = [
        'userAccessKeyId' => 'UserAccessKeyId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccessKeyInfoInRecycleBinRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserAccessKeyId'])) {
            $model->userAccessKeyId = $map['UserAccessKeyId'];
        }

        return $model;
    }
}

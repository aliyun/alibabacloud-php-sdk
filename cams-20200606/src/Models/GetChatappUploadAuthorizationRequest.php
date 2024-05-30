<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class GetChatappUploadAuthorizationRequest extends Model
{
    /**
     * @description The space ID of the user under the independent software vendor (ISV) account.
     *
     * This parameter is required.
     * @example 293483938849493
     *
     * @var string
     */
    public $custSpaceId;
    protected $_name = [
        'custSpaceId' => 'CustSpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetChatappUploadAuthorizationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }

        return $model;
    }
}

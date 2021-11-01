<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class UpdateAccessKeyRequest extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userAccessKeyId;

    /**
     * @var string
     */
    public $userPrincipalName;
    protected $_name = [
        'status'            => 'Status',
        'userAccessKeyId'   => 'UserAccessKeyId',
        'userPrincipalName' => 'UserPrincipalName',
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
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
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
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }

        return $model;
    }
}

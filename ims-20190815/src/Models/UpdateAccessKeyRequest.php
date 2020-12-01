<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class UpdateAccessKeyRequest extends Model
{
    /**
     * @var string
     */
    public $userPrincipalName;

    /**
     * @var string
     */
    public $userAccessKeyId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'userPrincipalName' => 'UserPrincipalName',
        'userAccessKeyId'   => 'UserAccessKeyId',
        'status'            => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('userAccessKeyId', $this->userAccessKeyId, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
        }
        if (null !== $this->userAccessKeyId) {
            $res['UserAccessKeyId'] = $this->userAccessKeyId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }
        if (isset($map['UserAccessKeyId'])) {
            $model->userAccessKeyId = $map['UserAccessKeyId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}

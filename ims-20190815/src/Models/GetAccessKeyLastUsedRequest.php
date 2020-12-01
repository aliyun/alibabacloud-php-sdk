<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class GetAccessKeyLastUsedRequest extends Model
{
    /**
     * @var string
     */
    public $userPrincipalName;

    /**
     * @var string
     */
    public $userAccessKeyId;
    protected $_name = [
        'userPrincipalName' => 'UserPrincipalName',
        'userAccessKeyId'   => 'UserAccessKeyId',
    ];

    public function validate()
    {
        Model::validateRequired('userAccessKeyId', $this->userAccessKeyId, true);
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccessKeyLastUsedRequest
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

        return $model;
    }
}

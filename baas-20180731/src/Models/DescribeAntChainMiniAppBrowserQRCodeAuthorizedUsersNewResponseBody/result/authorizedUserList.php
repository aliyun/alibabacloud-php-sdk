<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersNewResponseBody\result;

use AlibabaCloud\Tea\Model;

class authorizedUserList extends Model
{
    /**
     * @var string
     */
    public $gmtAuthorized;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'gmtAuthorized' => 'GmtAuthorized',
        'phone'         => 'Phone',
        'userId'        => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtAuthorized) {
            $res['GmtAuthorized'] = $this->gmtAuthorized;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authorizedUserList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtAuthorized'])) {
            $model->gmtAuthorized = $map['GmtAuthorized'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}

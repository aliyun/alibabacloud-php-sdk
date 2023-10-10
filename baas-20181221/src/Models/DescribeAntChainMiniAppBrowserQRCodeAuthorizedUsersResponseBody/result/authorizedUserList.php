<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainMiniAppBrowserQRCodeAuthorizedUsersResponseBody\result;

use AlibabaCloud\Tea\Model;

class authorizedUserList extends Model
{
    /**
     * @example 1580958389000
     *
     * @var string
     */
    public $gmtAuthorized;

    /**
     * @example 1380013****
     *
     * @var string
     */
    public $phone;
    protected $_name = [
        'gmtAuthorized' => 'GmtAuthorized',
        'phone'         => 'Phone',
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

        return $model;
    }
}

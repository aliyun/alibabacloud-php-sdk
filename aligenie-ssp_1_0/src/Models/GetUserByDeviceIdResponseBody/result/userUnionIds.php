<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetUserByDeviceIdResponseBody\result;

use AlibabaCloud\Tea\Model;

class userUnionIds extends Model
{
    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $userUnionId;
    protected $_name = [
        'organizationId' => 'OrganizationId',
        'userUnionId'    => 'UserUnionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->userUnionId) {
            $res['UserUnionId'] = $this->userUnionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userUnionIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['UserUnionId'])) {
            $model->userUnionId = $map['UserUnionId'];
        }

        return $model;
    }
}

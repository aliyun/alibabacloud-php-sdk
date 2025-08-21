<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\GetUserByDeviceIdResponseBody\result;

use AlibabaCloud\Dara\Model;

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
        'userUnionId' => 'UserUnionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

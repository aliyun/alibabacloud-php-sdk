<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class DescribeOrganizationUserCertsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example peers-aaaaaa2-1eqnj5o5w****
     *
     * @var string
     */
    public $organizationId;

    /**
     * @description This parameter is required.
     *
     * @example username
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'organizationId' => 'OrganizationId',
        'username'       => 'Username',
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
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOrganizationUserCertsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Tea\Model;

class GrantRoleToUsersRequest extends Model
{
    /**
     * @example acs:emr::w-975bcfda9625****:role/Owner
     *
     * @var string
     */
    public $roleArn;

    /**
     * @var string[]
     */
    public $userArns;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'roleArn'  => 'roleArn',
        'userArns' => 'userArns',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }
        if (null !== $this->userArns) {
            $res['userArns'] = $this->userArns;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantRoleToUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }
        if (isset($map['userArns'])) {
            if (!empty($map['userArns'])) {
                $model->userArns = $map['userArns'];
            }
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}

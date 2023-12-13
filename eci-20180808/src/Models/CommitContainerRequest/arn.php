<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CommitContainerRequest;

use AlibabaCloud\Tea\Model;

class arn extends Model
{
    /**
     * @description The ARN of the RAM role of the Container Registry Enterprise Edition instance.
     *
     * @example acs:ram:xxx
     *
     * @var string
     */
    public $roleArn;

    /**
     * @description The type of the authorization.
     *
     * @example user
     *
     * @var string
     */
    public $roleType;
    protected $_name = [
        'roleArn'  => 'RoleArn',
        'roleType' => 'RoleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->roleType) {
            $res['RoleType'] = $this->roleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return arn
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['RoleType'])) {
            $model->roleType = $map['RoleType'];
        }

        return $model;
    }
}

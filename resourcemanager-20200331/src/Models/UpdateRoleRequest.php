<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class UpdateRoleRequest extends Model
{
    /**
     * @example { "Statement": [ { "Action": "sts:AssumeRole", "Effect": "Allow", "Principal": { "RAM": "acs:ram::12345678901234****:root" } } ], "Version": "1" }
     *
     * @var string
     */
    public $newAssumeRolePolicyDocument;

    /**
     * @var string
     */
    public $newDescription;

    /**
     * @example 3600
     *
     * @var int
     */
    public $newMaxSessionDuration;

    /**
     * @example ECSAdmin
     *
     * @var string
     */
    public $roleName;
    protected $_name = [
        'newAssumeRolePolicyDocument' => 'NewAssumeRolePolicyDocument',
        'newDescription'              => 'NewDescription',
        'newMaxSessionDuration'       => 'NewMaxSessionDuration',
        'roleName'                    => 'RoleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newAssumeRolePolicyDocument) {
            $res['NewAssumeRolePolicyDocument'] = $this->newAssumeRolePolicyDocument;
        }
        if (null !== $this->newDescription) {
            $res['NewDescription'] = $this->newDescription;
        }
        if (null !== $this->newMaxSessionDuration) {
            $res['NewMaxSessionDuration'] = $this->newMaxSessionDuration;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewAssumeRolePolicyDocument'])) {
            $model->newAssumeRolePolicyDocument = $map['NewAssumeRolePolicyDocument'];
        }
        if (isset($map['NewDescription'])) {
            $model->newDescription = $map['NewDescription'];
        }
        if (isset($map['NewMaxSessionDuration'])) {
            $model->newMaxSessionDuration = $map['NewMaxSessionDuration'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}

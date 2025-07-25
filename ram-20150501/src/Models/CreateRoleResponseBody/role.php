<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\CreateRoleResponseBody;

use AlibabaCloud\Dara\Model;

class role extends Model
{
    /**
     * @var string
     */
    public $arn;

    /**
     * @var string
     */
    public $assumeRolePolicyDocument;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $maxSessionDuration;

    /**
     * @var string
     */
    public $roleId;

    /**
     * @var string
     */
    public $roleName;
    protected $_name = [
        'arn' => 'Arn',
        'assumeRolePolicyDocument' => 'AssumeRolePolicyDocument',
        'createDate' => 'CreateDate',
        'description' => 'Description',
        'maxSessionDuration' => 'MaxSessionDuration',
        'roleId' => 'RoleId',
        'roleName' => 'RoleName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arn) {
            $res['Arn'] = $this->arn;
        }

        if (null !== $this->assumeRolePolicyDocument) {
            $res['AssumeRolePolicyDocument'] = $this->assumeRolePolicyDocument;
        }

        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->maxSessionDuration) {
            $res['MaxSessionDuration'] = $this->maxSessionDuration;
        }

        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }

        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
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
        if (isset($map['Arn'])) {
            $model->arn = $map['Arn'];
        }

        if (isset($map['AssumeRolePolicyDocument'])) {
            $model->assumeRolePolicyDocument = $map['AssumeRolePolicyDocument'];
        }

        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['MaxSessionDuration'])) {
            $model->maxSessionDuration = $map['MaxSessionDuration'];
        }

        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}

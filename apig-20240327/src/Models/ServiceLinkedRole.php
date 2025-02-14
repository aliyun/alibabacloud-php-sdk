<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class ServiceLinkedRole extends Model
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
     * @var bool
     */
    public $isServiceLinkedRole;
    /**
     * @var string
     */
    public $roleId;
    /**
     * @var string
     */
    public $roleName;
    /**
     * @var string
     */
    public $rolePrincipalName;
    protected $_name = [
        'arn'                      => 'arn',
        'assumeRolePolicyDocument' => 'assumeRolePolicyDocument',
        'createDate'               => 'createDate',
        'description'              => 'description',
        'isServiceLinkedRole'      => 'isServiceLinkedRole',
        'roleId'                   => 'roleId',
        'roleName'                 => 'roleName',
        'rolePrincipalName'        => 'rolePrincipalName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arn) {
            $res['arn'] = $this->arn;
        }

        if (null !== $this->assumeRolePolicyDocument) {
            $res['assumeRolePolicyDocument'] = $this->assumeRolePolicyDocument;
        }

        if (null !== $this->createDate) {
            $res['createDate'] = $this->createDate;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->isServiceLinkedRole) {
            $res['isServiceLinkedRole'] = $this->isServiceLinkedRole;
        }

        if (null !== $this->roleId) {
            $res['roleId'] = $this->roleId;
        }

        if (null !== $this->roleName) {
            $res['roleName'] = $this->roleName;
        }

        if (null !== $this->rolePrincipalName) {
            $res['rolePrincipalName'] = $this->rolePrincipalName;
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
        if (isset($map['arn'])) {
            $model->arn = $map['arn'];
        }

        if (isset($map['assumeRolePolicyDocument'])) {
            $model->assumeRolePolicyDocument = $map['assumeRolePolicyDocument'];
        }

        if (isset($map['createDate'])) {
            $model->createDate = $map['createDate'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['isServiceLinkedRole'])) {
            $model->isServiceLinkedRole = $map['isServiceLinkedRole'];
        }

        if (isset($map['roleId'])) {
            $model->roleId = $map['roleId'];
        }

        if (isset($map['roleName'])) {
            $model->roleName = $map['roleName'];
        }

        if (isset($map['rolePrincipalName'])) {
            $model->rolePrincipalName = $map['rolePrincipalName'];
        }

        return $model;
    }
}

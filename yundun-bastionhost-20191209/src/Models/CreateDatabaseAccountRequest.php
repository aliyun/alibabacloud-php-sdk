<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;

class CreateDatabaseAccountRequest extends Model
{
    /**
     * @var string
     */
    public $databaseAccountName;

    /**
     * @var string
     */
    public $databaseId;

    /**
     * @var string
     */
    public $databaseSchema;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $loginAttribute;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'databaseAccountName' => 'DatabaseAccountName',
        'databaseId' => 'DatabaseId',
        'databaseSchema' => 'DatabaseSchema',
        'instanceId' => 'InstanceId',
        'loginAttribute' => 'LoginAttribute',
        'password' => 'Password',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databaseAccountName) {
            $res['DatabaseAccountName'] = $this->databaseAccountName;
        }

        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
        }

        if (null !== $this->databaseSchema) {
            $res['DatabaseSchema'] = $this->databaseSchema;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->loginAttribute) {
            $res['LoginAttribute'] = $this->loginAttribute;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['DatabaseAccountName'])) {
            $model->databaseAccountName = $map['DatabaseAccountName'];
        }

        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }

        if (isset($map['DatabaseSchema'])) {
            $model->databaseSchema = $map['DatabaseSchema'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LoginAttribute'])) {
            $model->loginAttribute = $map['LoginAttribute'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

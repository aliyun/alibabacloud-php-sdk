<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListEnabledExtensionsForProjectResponseBody;

use AlibabaCloud\Dara\Model;

class extensions extends Model
{
    /**
     * @var string
     */
    public $createUser;
    /**
     * @var string
     */
    public $extensionCode;
    /**
     * @var string
     */
    public $extensionDesc;
    /**
     * @var string
     */
    public $extensionName;
    /**
     * @var string
     */
    public $modifyUser;
    /**
     * @var string
     */
    public $owner;
    /**
     * @var string
     */
    public $parameterSetting;
    /**
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'createUser'       => 'CreateUser',
        'extensionCode'    => 'ExtensionCode',
        'extensionDesc'    => 'ExtensionDesc',
        'extensionName'    => 'ExtensionName',
        'modifyUser'       => 'ModifyUser',
        'owner'            => 'Owner',
        'parameterSetting' => 'ParameterSetting',
        'tenantId'         => 'TenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }

        if (null !== $this->extensionCode) {
            $res['ExtensionCode'] = $this->extensionCode;
        }

        if (null !== $this->extensionDesc) {
            $res['ExtensionDesc'] = $this->extensionDesc;
        }

        if (null !== $this->extensionName) {
            $res['ExtensionName'] = $this->extensionName;
        }

        if (null !== $this->modifyUser) {
            $res['ModifyUser'] = $this->modifyUser;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->parameterSetting) {
            $res['ParameterSetting'] = $this->parameterSetting;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }

        if (isset($map['ExtensionCode'])) {
            $model->extensionCode = $map['ExtensionCode'];
        }

        if (isset($map['ExtensionDesc'])) {
            $model->extensionDesc = $map['ExtensionDesc'];
        }

        if (isset($map['ExtensionName'])) {
            $model->extensionName = $map['ExtensionName'];
        }

        if (isset($map['ModifyUser'])) {
            $model->modifyUser = $map['ModifyUser'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['ParameterSetting'])) {
            $model->parameterSetting = $map['ParameterSetting'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}

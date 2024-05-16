<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListEnabledExtensionsForProjectResponseBody;

use AlibabaCloud\Tea\Model;

class extensions extends Model
{
    /**
     * @description The modifier of the extension.
     *
     * @example 3444434343555
     *
     * @var string
     */
    public $createUser;

    /**
     * @description The name of the extension.
     *
     * @example a94a8e23bc0b4dfab9a5e4d2f374d645
     *
     * @var string
     */
    public $extensionCode;

    /**
     * @description The owner ID.
     *
     * @var string
     */
    public $extensionDesc;

    /**
     * @description The ID of the tenant.
     *
     * @var string
     */
    public $extensionName;

    /**
     * @description The description of the extension.
     *
     * @example 34452335611988
     *
     * @var string
     */
    public $modifyUser;

    /**
     * @description The parameter settings of the extension. For more information, see [Configure extension parameters](https://help.aliyun.com/document_detail/405354.html).
     *
     * @example 21323672*******55500
     *
     * @var string
     */
    public $owner;

    /**
     * @description The time when the extension was created.
     *
     * @example extension.fileType.23.deploy-file.enabled=true
     *
     * @var string
     */
    public $parameterSetting;

    /**
     * @description The creator of the extension.
     *
     * @example 529889518659842
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return extensions
     */
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

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ModifyCloudVendorAccountAKResponseBody\data;

use AlibabaCloud\Dara\Model;

class authModules extends Model
{
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $module;
    /**
     * @var string
     */
    public $moduleAssetType;
    /**
     * @var string
     */
    public $moduleDisp;
    /**
     * @var int
     */
    public $moduleServiceStatus;
    /**
     * @var string
     */
    public $moduleStatement;
    protected $_name = [
        'message'             => 'Message',
        'module'              => 'Module',
        'moduleAssetType'     => 'ModuleAssetType',
        'moduleDisp'          => 'ModuleDisp',
        'moduleServiceStatus' => 'ModuleServiceStatus',
        'moduleStatement'     => 'ModuleStatement',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }

        if (null !== $this->moduleAssetType) {
            $res['ModuleAssetType'] = $this->moduleAssetType;
        }

        if (null !== $this->moduleDisp) {
            $res['ModuleDisp'] = $this->moduleDisp;
        }

        if (null !== $this->moduleServiceStatus) {
            $res['ModuleServiceStatus'] = $this->moduleServiceStatus;
        }

        if (null !== $this->moduleStatement) {
            $res['ModuleStatement'] = $this->moduleStatement;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }

        if (isset($map['ModuleAssetType'])) {
            $model->moduleAssetType = $map['ModuleAssetType'];
        }

        if (isset($map['ModuleDisp'])) {
            $model->moduleDisp = $map['ModuleDisp'];
        }

        if (isset($map['ModuleServiceStatus'])) {
            $model->moduleServiceStatus = $map['ModuleServiceStatus'];
        }

        if (isset($map['ModuleStatement'])) {
            $model->moduleStatement = $map['ModuleStatement'];
        }

        return $model;
    }
}

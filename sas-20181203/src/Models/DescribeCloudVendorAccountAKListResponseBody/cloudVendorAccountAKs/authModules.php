<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCloudVendorAccountAKListResponseBody\cloudVendorAccountAKs;

use AlibabaCloud\Tea\Model;

class authModules extends Model
{
    /**
     * @description The error message of the module.
     *
     * @example ak_domain_error
     *
     * @var string
     */
    public $message;

    /**
     * @description The code of the module. Valid values:
     *
     *   **HOST**: host
     *   **CSPM**: configuration assessment
     *   **SIEM**: CloudSiem
     *   **TRIAL**: log audit
     *
     * @example HOST
     *
     * @var string
     */
    public $module;

    /**
     * @description The cloud asset that is associated with the module.
     *
     * @example Cloud server or virtual machine
     *
     * @var string
     */
    public $moduleAssetType;

    /**
     * @description The display name of the module.
     *
     * @example Host Assets
     *
     * @var string
     */
    public $moduleDisp;

    /**
     * @description The service status of the module. Valid values:
     *
     *   **0**: being used
     *   **1**: exception occurred
     *   **2**: being validated
     *   **3**: validation timed out
     *
     * @example 0
     *
     * @var int
     */
    public $moduleServiceStatus;

    /**
     * @description The permission description of the module.
     *
     * @example Read permission of the cloud server or virtual machine
     *
     * @var string
     */
    public $moduleStatement;

    /**
     * @description The error message of the log audit service.
     *
     * @example timeout
     *
     * @var string
     */
    public $trailMessage;

    /**
     * @description The status of the log audit service. Valid values:
     *
     *   **init**: being initialized
     *   **verify**: being validated
     *   **enable**: enabled
     *   **disable**: disabled
     *   **error**: exception occurred
     *   **timeout**: validation timed out
     *
     * @example enable
     *
     * @var string
     */
    public $trailStatus;
    protected $_name = [
        'message'             => 'Message',
        'module'              => 'Module',
        'moduleAssetType'     => 'ModuleAssetType',
        'moduleDisp'          => 'ModuleDisp',
        'moduleServiceStatus' => 'ModuleServiceStatus',
        'moduleStatement'     => 'ModuleStatement',
        'trailMessage'        => 'TrailMessage',
        'trailStatus'         => 'TrailStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->trailMessage) {
            $res['TrailMessage'] = $this->trailMessage;
        }
        if (null !== $this->trailStatus) {
            $res['TrailStatus'] = $this->trailStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authModules
     */
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
        if (isset($map['TrailMessage'])) {
            $model->trailMessage = $map['TrailMessage'];
        }
        if (isset($map['TrailStatus'])) {
            $model->trailStatus = $map['TrailStatus'];
        }

        return $model;
    }
}

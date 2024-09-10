<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\AddCloudVendorAccountAKResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\AddCloudVendorAccountAKResponseBody\data\authModules;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The type of the account to which the AccessKey pair belongs. Valid values:
     *
     *   **primary**: a primary account
     *   **sub**: a sub-account
     *
     * @example sub
     *
     * @var string
     */
    public $akType;

    /**
     * @description The unique ID of the AccessKey pair.
     *
     * @example 2158
     *
     * @var int
     */
    public $authId;

    /**
     * @description The modules that are associated with the AccessKey pair.
     *
     * @var authModules[]
     */
    public $authModules;

    /**
     * @description The error message of the AccessKey pair.
     *
     * @example The IAM user is forbidden in the currently selected region
     *
     * @var string
     */
    public $message;

    /**
     * @description The AccessKey ID.
     *
     * @example AE6SLd****
     *
     * @var string
     */
    public $secretId;

    /**
     * @description The service status of the AccessKey pair. Valid values:
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
    public $serviceStatus;

    /**
     * @description The status of the AccessKey pair. Valid values:
     *
     *   **0**: enabled
     *   **1**: disabled
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The cloud service provider. Valid values:
     *
     *   **Tencent**: Tencent Cloud
     *   **HUAWEICLOUD**: Huawei Cloud
     *   **Azure**: Microsoft Azure
     *   **AWS**: AWS
     *
     * @example Tencent
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'akType'        => 'AkType',
        'authId'        => 'AuthId',
        'authModules'   => 'AuthModules',
        'message'       => 'Message',
        'secretId'      => 'SecretId',
        'serviceStatus' => 'ServiceStatus',
        'status'        => 'Status',
        'vendor'        => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->akType) {
            $res['AkType'] = $this->akType;
        }
        if (null !== $this->authId) {
            $res['AuthId'] = $this->authId;
        }
        if (null !== $this->authModules) {
            $res['AuthModules'] = [];
            if (null !== $this->authModules && \is_array($this->authModules)) {
                $n = 0;
                foreach ($this->authModules as $item) {
                    $res['AuthModules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->secretId) {
            $res['SecretId'] = $this->secretId;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AkType'])) {
            $model->akType = $map['AkType'];
        }
        if (isset($map['AuthId'])) {
            $model->authId = $map['AuthId'];
        }
        if (isset($map['AuthModules'])) {
            if (!empty($map['AuthModules'])) {
                $model->authModules = [];
                $n                  = 0;
                foreach ($map['AuthModules'] as $item) {
                    $model->authModules[$n++] = null !== $item ? authModules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['SecretId'])) {
            $model->secretId = $map['SecretId'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}

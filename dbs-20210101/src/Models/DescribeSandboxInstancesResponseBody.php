<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSandboxInstancesResponseBody extends Model
{
    /**
     * @description The error code.
     *
     * @example Param.NotFound
     *
     * @var string
     */
    public $code;

    /**
     * @description The response parameters.
     *
     *   **connectionString**: the connection string of the sandbox instance, in the format of IP address:Port number. This parameter indicates the endpoint of the sandbox instance if the value of the SandboxType parameter is **Sandbox**. This parameter indicates the Network File System (NFS) mount address if the value of the SandboxType parameter is **NFS**.
     *   **restoreSeconds**: the time required to create the sandbox instance. Unit: seconds.
     *   **restoreTime**: the point in time to which the sandbox instance is restored. The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mm:ssZ format. The time is displayed in UTC.
     *   **instanceId**: the ID of the sandbox instance.
     *   **backupSetId**: the ID of the backup set.
     *   **createTime**: the point in time when the sandbox instance was created. The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mm:ssZ format. The time is displayed in UTC.
     *   **backupPlanId**: the ID of the backup schedule.
     *   **vpcId**: the ID of the virtual private cloud (VPC).
     *   **vpcSwitchId**: the ID of the VSwitch.
     *   **sandboxSpecification**: the specifications of the sandbox instance.
     *   **status**: the status of the sandbox instance. Valid values: **running**, **check_pass**, and **stop**.
     *
     * @example {     "number": 1,     "size": 1,     "content": [       {         "connectionString": "172.26.178.229:3306",         "restoreSeconds": 15,         "restoreTime": "2021-08-11T07:26:24Z",         "instanceId": "1jxxxxx9xxxms",         "backupSetId": "1hxxxx8xxxxxa_20210811152624",         "createTime": "2021-08-12T07:40:29Z",         "backupPlanId": "1hxxxx8xxxxxa",         "vpcId": "vpc-bp1dxxxxxjy0xxxxx1xxp",         "sandboxSpecification": "MYSQL_1C_1M_SD",         "status": "running",         "vpcSwitchId": "vsw-bp1bxxxxxumxxxxxwxx2w"       }     ],     "totalElements": 1   }
     *
     * @var string
     */
    public $data;

    /**
     * @description The error code.
     *
     * @example Param.NotFound
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message.
     *
     * @example The specified parameter %s value is not valid.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The error message.
     *
     * @example The specified parameter %s value is not valid.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 4F1888AC-1138-4995-B9FE-D2734F61C058
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'code'       => 'Code',
        'data'       => 'Data',
        'errCode'    => 'ErrCode',
        'errMessage' => 'ErrMessage',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSandboxInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}

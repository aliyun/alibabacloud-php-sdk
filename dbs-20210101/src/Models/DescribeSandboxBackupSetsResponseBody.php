<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSandboxBackupSetsResponseBody extends Model
{
    /**
     * @description The error code returned if the request failed.
     *
     * @example Param.NotFound
     *
     * @var string
     */
    public $code;

    /**
     * @description The returned data. The following parameters are contained:
     *
     *   **backupSetTime**: the point in time when the snapshot was created. The time follows the ISO 8601 standard in the yyyy-MM-ddThh:mm:ssZ format. The time is displayed in UTC.
     *   **backupSetId**: the ID of the backup set.
     *   **backupSetType**: the type of the snapshot. A value of **Full** indicates that the snapshot is a full backup snapshot. A value of **Inc** indicates that the snapshot is an incremental backup snapshot.
     *   **backupPlanId**: the ID of the backup schedule.
     *
     * @example "Data": {     "number": 2,     "size": 2,     "content": [       {         "backupSetTime": "2021-08-28T23:12:31Z",         "backupSetId": "Inc_1hxxxx8xxxxxa_20210801064200_mysql-bin.000134",         "backupSetType": "Inc",         "backupPlanId": "1hxxxx8xxxxxa"       },       {         "backupSetTime": "2021-08-28T22:42:28Z",         "backupSetId": "1hxxxx8xxxxxa_20210829064228",         "backupSetType": "FULL",         "backupPlanId": "1hxxxx8xxxxxa"       }     ],     "totalElements": 2   },
     *
     * @var string
     */
    public $data;

    /**
     * @description The error code returned if the request failed.
     *
     * @example Param.NotFound
     *
     * @var string
     */
    public $errCode;

    /**
     * @description The error message returned if the request failed.
     *
     * @example The specified parameter %s value is not valid.
     *
     * @var string
     */
    public $errMessage;

    /**
     * @description The error message returned if the request failed.
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
     * @description Indicates whether the request was successful.
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
     * @return DescribeSandboxBackupSetsResponseBody
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

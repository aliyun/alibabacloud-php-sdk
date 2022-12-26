<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupMachineStatusResponseBody\backupMachineStatus;

use AlibabaCloud\Tea\Model;

class errorList extends Model
{
    /**
     * @example TARGET_NOT_EXIST
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example FAILED
     *
     * @var string
     */
    public $errorStatus;
    protected $_name = [
        'errorCode'   => 'ErrorCode',
        'errorStatus' => 'ErrorStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorStatus) {
            $res['ErrorStatus'] = $this->errorStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorStatus'])) {
            $model->errorStatus = $map['ErrorStatus'];
        }

        return $model;
    }
}

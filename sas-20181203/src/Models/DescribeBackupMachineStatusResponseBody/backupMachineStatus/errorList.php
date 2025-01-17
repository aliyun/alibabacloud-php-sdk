<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBackupMachineStatusResponseBody\backupMachineStatus;

use AlibabaCloud\Dara\Model;

class errorList extends Model
{
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var string
     */
    public $errorStatus;
    protected $_name = [
        'errorCode'   => 'ErrorCode',
        'errorStatus' => 'ErrorStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

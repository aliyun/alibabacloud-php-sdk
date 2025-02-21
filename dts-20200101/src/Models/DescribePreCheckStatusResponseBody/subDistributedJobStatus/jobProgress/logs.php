<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\subDistributedJobStatus\jobProgress;

use AlibabaCloud\Dara\Model;

class logs extends Model
{
    /**
     * @var string
     */
    public $errData;
    /**
     * @var string
     */
    public $errMsg;
    /**
     * @var string
     */
    public $errType;
    /**
     * @var string
     */
    public $logLevel;
    protected $_name = [
        'errData'  => 'ErrData',
        'errMsg'   => 'ErrMsg',
        'errType'  => 'ErrType',
        'logLevel' => 'LogLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errData) {
            $res['ErrData'] = $this->errData;
        }

        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
        }

        if (null !== $this->errType) {
            $res['ErrType'] = $this->errType;
        }

        if (null !== $this->logLevel) {
            $res['LogLevel'] = $this->logLevel;
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
        if (isset($map['ErrData'])) {
            $model->errData = $map['ErrData'];
        }

        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
        }

        if (isset($map['ErrType'])) {
            $model->errType = $map['ErrType'];
        }

        if (isset($map['LogLevel'])) {
            $model->logLevel = $map['LogLevel'];
        }

        return $model;
    }
}

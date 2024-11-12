<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\fullNetCheckJobStatus\jobProgress;

use AlibabaCloud\Tea\Model;

class logs extends Model
{
    /**
     * @description Error record.
     *
     * @example CREATE TABLE `dtstestdata`.`customer` ****
     *
     * @var string
     */
    public $errData;

    /**
     * @description Specific error message.
     *
     * @example get metric list fail
     *
     * @var string
     */
    public $errMsg;

    /**
     * @description Type of error.
     *
     * @example ForeignKey
     *
     * @var string
     */
    public $errType;

    /**
     * @description The level of the log.
     *
     * @example INFO
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return logs
     */
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

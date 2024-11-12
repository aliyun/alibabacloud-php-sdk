<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\analysisJobProgress;

use AlibabaCloud\Tea\Model;

class logs extends Model
{
    /**
     * @description Error message
     *
     * @example Please modify this object
     *
     * @var string
     */
    public $errData;

    /**
     * @description Error message from DTS when a specific project encounters an error.
     *
     * @example DTS-1020042 Execute sql error sql: Table \\"customer\\" already exists
     *
     * @var string
     */
    public $errMsg;

    /**
     * @description Error type.
     *
     * @example ForeignKey
     *
     * @var string
     */
    public $errType;

    /**
     * @description The level of the log.
     *
     * @example ERROR
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

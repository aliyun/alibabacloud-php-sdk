<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribePreCheckStatusResponseBody\subDistributedJobStatus\jobProgress;

use AlibabaCloud\Tea\Model;

class logs extends Model
{
    /**
     * @description The record of errors.
     *
     * @example CREATE TABLE `dtstestdata`.`customer` (\n`runoob_id` int(10) unsigned auto_increment COMMENT \"\" NOT NULL , \n`runoob_title` varchar(100) CHARSET `utf8` COLLATE `utf8_general_ci` COMMENT \"\" NOT NULL , \n`runoob_author1216` varchar(40) CHARSET `utf8` COLLATE `utf8_general_ci` COMMENT \"\" NOT NULL , \n`submission_date1216` date COMMENT \"\" NULL \n, PRIMARY KEY (`runoob_id`)) engine=InnoDB AUTO_INCREMENT=200001 DEFAULT CHARSET=`utf8` DEFAULT COLLATE `utf8_general_ci` ROW_FORMAT= Dynamic comment = \"\" ;\n
     *
     * @var string
     */
    public $errData;

    /**
     * @description The error message.
     *
     * @example get metric list fail
     *
     * @var string
     */
    public $errMsg;

    /**
     * @description The error type.
     *
     * @example ForeignKey
     *
     * @var string
     */
    public $errType;

    /**
     * @description The level of logs.
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

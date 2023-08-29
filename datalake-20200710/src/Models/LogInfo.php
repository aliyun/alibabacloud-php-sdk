<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class LogInfo extends Model
{
    /**
     * @var string
     */
    public $bizTime;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $logContent;

    /**
     * @var string
     */
    public $logId;

    /**
     * @var string
     */
    public $logSummary;

    /**
     * @var string
     */
    public $logType;
    protected $_name = [
        'bizTime'    => 'BizTime',
        'gmtCreate'  => 'GmtCreate',
        'instanceId' => 'InstanceId',
        'logContent' => 'LogContent',
        'logId'      => 'LogId',
        'logSummary' => 'LogSummary',
        'logType'    => 'LogType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizTime) {
            $res['BizTime'] = $this->bizTime;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->logContent) {
            $res['LogContent'] = $this->logContent;
        }
        if (null !== $this->logId) {
            $res['LogId'] = $this->logId;
        }
        if (null !== $this->logSummary) {
            $res['LogSummary'] = $this->logSummary;
        }
        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LogInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizTime'])) {
            $model->bizTime = $map['BizTime'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LogContent'])) {
            $model->logContent = $map['LogContent'];
        }
        if (isset($map['LogId'])) {
            $model->logId = $map['LogId'];
        }
        if (isset($map['LogSummary'])) {
            $model->logSummary = $map['LogSummary'];
        }
        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }

        return $model;
    }
}

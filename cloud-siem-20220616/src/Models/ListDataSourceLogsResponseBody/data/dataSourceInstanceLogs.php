<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDataSourceLogsResponseBody\data;

use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDataSourceLogsResponseBody\data\dataSourceInstanceLogs\logParams;
use AlibabaCloud\Tea\Model;

class dataSourceInstanceLogs extends Model
{
    /**
     * @description The code of the log.
     *
     * @example cloud_siem_waf_xxxxx
     *
     * @var string
     */
    public $logCode;

    /**
     * @description The ID of the log. The value is obtained after the threat analysis feature calculates the MD5 hash value of a parameter.
     *
     * @example 220ba97c9d1fdb0b9c7e8c7ca328d7ea
     *
     * @var string
     */
    public $logInstanceId;

    /**
     * @description The display code of the log.
     *
     * @example ${siem.prod.cloud_siem_waf_xxxxx}
     *
     * @var string
     */
    public $logMdsCode;

    /**
     * @description The parameters of the log.
     *
     * @var logParams[]
     */
    public $logParams;

    /**
     * @description Indicates whether the task for which logs are collected is enabled. Valid values:
     *
     *   1: yes
     *   0: no
     *
     * @example 1
     *
     * @var int
     */
    public $taskStatus;
    protected $_name = [
        'logCode'       => 'LogCode',
        'logInstanceId' => 'LogInstanceId',
        'logMdsCode'    => 'LogMdsCode',
        'logParams'     => 'LogParams',
        'taskStatus'    => 'TaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logCode) {
            $res['LogCode'] = $this->logCode;
        }
        if (null !== $this->logInstanceId) {
            $res['LogInstanceId'] = $this->logInstanceId;
        }
        if (null !== $this->logMdsCode) {
            $res['LogMdsCode'] = $this->logMdsCode;
        }
        if (null !== $this->logParams) {
            $res['LogParams'] = [];
            if (null !== $this->logParams && \is_array($this->logParams)) {
                $n = 0;
                foreach ($this->logParams as $item) {
                    $res['LogParams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSourceInstanceLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogCode'])) {
            $model->logCode = $map['LogCode'];
        }
        if (isset($map['LogInstanceId'])) {
            $model->logInstanceId = $map['LogInstanceId'];
        }
        if (isset($map['LogMdsCode'])) {
            $model->logMdsCode = $map['LogMdsCode'];
        }
        if (isset($map['LogParams'])) {
            if (!empty($map['LogParams'])) {
                $model->logParams = [];
                $n                = 0;
                foreach ($map['LogParams'] as $item) {
                    $model->logParams[$n++] = null !== $item ? logParams::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}

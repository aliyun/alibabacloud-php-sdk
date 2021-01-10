<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpImportResultResponseBody\fpResultLogInfoList;

use AlibabaCloud\Tea\Model;

class fpResultLogInfo extends Model
{
    /**
     * @var int
     */
    public $logStartTime;

    /**
     * @var string
     */
    public $logPath;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $logSize;

    /**
     * @var string
     */
    public $logName;

    /**
     * @var int
     */
    public $logEndTime;
    protected $_name = [
        'logStartTime' => 'LogStartTime',
        'logPath'      => 'LogPath',
        'createTime'   => 'CreateTime',
        'logSize'      => 'LogSize',
        'logName'      => 'LogName',
        'logEndTime'   => 'LogEndTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logStartTime) {
            $res['LogStartTime'] = $this->logStartTime;
        }
        if (null !== $this->logPath) {
            $res['LogPath'] = $this->logPath;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->logSize) {
            $res['LogSize'] = $this->logSize;
        }
        if (null !== $this->logName) {
            $res['LogName'] = $this->logName;
        }
        if (null !== $this->logEndTime) {
            $res['LogEndTime'] = $this->logEndTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fpResultLogInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogStartTime'])) {
            $model->logStartTime = $map['LogStartTime'];
        }
        if (isset($map['LogPath'])) {
            $model->logPath = $map['LogPath'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LogSize'])) {
            $model->logSize = $map['LogSize'];
        }
        if (isset($map['LogName'])) {
            $model->logName = $map['LogName'];
        }
        if (isset($map['LogEndTime'])) {
            $model->logEndTime = $map['LogEndTime'];
        }

        return $model;
    }
}

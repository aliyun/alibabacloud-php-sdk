<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpImportResultResponseBody\fpResultLogInfoList;

use AlibabaCloud\Tea\Model;

class fpResultLogInfo extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $logEndTime;

    /**
     * @var string
     */
    public $logName;

    /**
     * @var string
     */
    public $logPath;

    /**
     * @var int
     */
    public $logSize;

    /**
     * @var int
     */
    public $logStartTime;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'logEndTime'   => 'LogEndTime',
        'logName'      => 'LogName',
        'logPath'      => 'LogPath',
        'logSize'      => 'LogSize',
        'logStartTime' => 'LogStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->logEndTime) {
            $res['LogEndTime'] = $this->logEndTime;
        }
        if (null !== $this->logName) {
            $res['LogName'] = $this->logName;
        }
        if (null !== $this->logPath) {
            $res['LogPath'] = $this->logPath;
        }
        if (null !== $this->logSize) {
            $res['LogSize'] = $this->logSize;
        }
        if (null !== $this->logStartTime) {
            $res['LogStartTime'] = $this->logStartTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LogEndTime'])) {
            $model->logEndTime = $map['LogEndTime'];
        }
        if (isset($map['LogName'])) {
            $model->logName = $map['LogName'];
        }
        if (isset($map['LogPath'])) {
            $model->logPath = $map['LogPath'];
        }
        if (isset($map['LogSize'])) {
            $model->logSize = $map['LogSize'];
        }
        if (isset($map['LogStartTime'])) {
            $model->logStartTime = $map['LogStartTime'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class TaskLog extends Model
{
    /**
     * @var string
     */
    public $funcName;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $level;

    /**
     * @var int
     */
    public $lineNo;

    /**
     * @var string
     */
    public $logId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'funcName'  => 'FuncName',
        'gmtCreate' => 'GmtCreate',
        'level'     => 'Level',
        'lineNo'    => 'LineNo',
        'logId'     => 'LogId',
        'message'   => 'Message',
        'taskId'    => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->funcName) {
            $res['FuncName'] = $this->funcName;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->lineNo) {
            $res['LineNo'] = $this->lineNo;
        }
        if (null !== $this->logId) {
            $res['LogId'] = $this->logId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TaskLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FuncName'])) {
            $model->funcName = $map['FuncName'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['LineNo'])) {
            $model->lineNo = $map['LineNo'];
        }
        if (isset($map['LogId'])) {
            $model->logId = $map['LogId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class CreateOfficeConversionTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $percent;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $tgtLoc;
    protected $_name = [
        'createTime' => 'CreateTime',
        'percent'    => 'Percent',
        'requestId'  => 'RequestId',
        'status'     => 'Status',
        'taskId'     => 'TaskId',
        'tgtLoc'     => 'TgtLoc',
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
        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->tgtLoc) {
            $res['TgtLoc'] = $this->tgtLoc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOfficeConversionTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TgtLoc'])) {
            $model->tgtLoc = $map['TgtLoc'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateJenkinsImageScanTaskStatusRequest extends Model
{
    /**
     * @description 任务执行结果，一般用于存储扫描失败的报错信息
     *
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @description 处理阶段
     *
     * @var string
     */
    public $status;

    /**
     * @description 任务 id
     *
     * @var string
     */
    public $taskId;

    /**
     * @description jenkins 镜像仓库 token，必填
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'result'   => 'Result',
        'sourceIp' => 'SourceIp',
        'status'   => 'Status',
        'taskId'   => 'TaskId',
        'token'    => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateJenkinsImageScanTaskStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}

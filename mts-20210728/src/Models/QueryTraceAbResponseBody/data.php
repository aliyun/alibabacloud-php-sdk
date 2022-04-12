<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20210728\Models\QueryTraceAbResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 任务结果回调
     *
     * @var string
     */
    public $callback;

    /**
     * @description 创建时间
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description 最后修改时间
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description 输入oss地址
     *
     * @var string
     */
    public $input;

    /**
     * @description 任务id
     *
     * @var string
     */
    public $jobId;

    /**
     * @description 水印强度
     *
     * @var int
     */
    public $level;

    /**
     * @description 媒体id
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description 输出地址
     *
     * @var string
     */
    public $output;

    /**
     * @description 任务结果
     *
     * @var string
     */
    public $result;

    /**
     * @description 任务状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 用户数据
     *
     * @var string
     */
    public $userData;

    /**
     * @description uid
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'callback'    => 'Callback',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'input'       => 'Input',
        'jobId'       => 'JobId',
        'level'       => 'Level',
        'mediaId'     => 'MediaId',
        'output'      => 'Output',
        'result'      => 'Result',
        'status'      => 'Status',
        'userData'    => 'UserData',
        'userId'      => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}

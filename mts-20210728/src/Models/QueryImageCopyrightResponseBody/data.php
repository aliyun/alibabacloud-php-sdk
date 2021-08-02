<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20210728\Models\QueryImageCopyrightResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
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
     * @description 水印图片输入oss地址
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
     * @description 水印信息
     *
     * @var string
     */
    public $message;

    /**
     * @description 水印信息id
     *
     * @var int
     */
    public $messageId;

    /**
     * @description 加完水印后的输出oss地址
     *
     * @var string
     */
    public $output;

    /**
     * @description 任务状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 用户自定义数据
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
        'gmtCreate'   => 'Gmt_create',
        'gmtModified' => 'Gmt_modified',
        'input'       => 'Input',
        'jobId'       => 'Job_id',
        'level'       => 'Level',
        'message'     => 'Message',
        'messageId'   => 'Message_id',
        'output'      => 'Output',
        'status'      => 'Status',
        'userData'    => 'User_data',
        'userId'      => 'User_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['Gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['Gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }
        if (null !== $this->jobId) {
            $res['Job_id'] = $this->jobId;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->messageId) {
            $res['Message_id'] = $this->messageId;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userData) {
            $res['User_data'] = $this->userData;
        }
        if (null !== $this->userId) {
            $res['User_id'] = $this->userId;
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
        if (isset($map['Gmt_create'])) {
            $model->gmtCreate = $map['Gmt_create'];
        }
        if (isset($map['Gmt_modified'])) {
            $model->gmtModified = $map['Gmt_modified'];
        }
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }
        if (isset($map['Job_id'])) {
            $model->jobId = $map['Job_id'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Message_id'])) {
            $model->messageId = $map['Message_id'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['User_data'])) {
            $model->userData = $map['User_data'];
        }
        if (isset($map['User_id'])) {
            $model->userId = $map['User_id'];
        }

        return $model;
    }
}

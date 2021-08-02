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
        'gmtCreate'   => 'Gmt_create',
        'gmtModified' => 'Gmt_modified',
        'input'       => 'Input',
        'jobId'       => 'Job_id',
        'level'       => 'Level',
        'mediaId'     => 'Media_id',
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
        if (null !== $this->callback) {
            $res['Callback'] = $this->callback;
        }
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
        if (null !== $this->mediaId) {
            $res['Media_id'] = $this->mediaId;
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
        if (isset($map['Callback'])) {
            $model->callback = $map['Callback'];
        }
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
        if (isset($map['Media_id'])) {
            $model->mediaId = $map['Media_id'];
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

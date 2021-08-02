<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20210728\Models\QueryTraceMuResponseBody;

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
     * @description 任务id
     *
     * @var string
     */
    public $jobId;

    /**
     * @description 媒体id
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description 输出oss地址
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
     * @description 溯源水印信息
     *
     * @var string
     */
    public $trace;

    /**
     * @description 溯源水印信息id
     *
     * @var int
     */
    public $traceId;

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
        'jobId'       => 'Job_id',
        'mediaId'     => 'Media_id',
        'output'      => 'Output',
        'status'      => 'Status',
        'trace'       => 'Trace',
        'traceId'     => 'Trace_id',
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
        if (null !== $this->jobId) {
            $res['Job_id'] = $this->jobId;
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
        if (null !== $this->trace) {
            $res['Trace'] = $this->trace;
        }
        if (null !== $this->traceId) {
            $res['Trace_id'] = $this->traceId;
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
        if (isset($map['Job_id'])) {
            $model->jobId = $map['Job_id'];
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
        if (isset($map['Trace'])) {
            $model->trace = $map['Trace'];
        }
        if (isset($map['Trace_id'])) {
            $model->traceId = $map['Trace_id'];
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

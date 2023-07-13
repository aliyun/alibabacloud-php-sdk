<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class GetJobLogRequest extends Model
{
    /**
     * @description The maximum size of logs that you can read in a single request.
     *
     * Default value: 1024
     * @example ehpc-hz-jeJki6****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the task.
     *
     * @example compute000
     *
     * @var string
     */
    public $execHost;

    /**
     * @description The position where logs start to be read.
     *
     * Default value: 0
     * @example 1.scheduler****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The content of the output logs. The content is encoded in Base64.
     *
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @description The ID of the job.
     *
     * @example 1024
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'execHost'  => 'ExecHost',
        'jobId'     => 'JobId',
        'offset'    => 'Offset',
        'size'      => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->execHost) {
            $res['ExecHost'] = $this->execHost;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ExecHost'])) {
            $model->execHost = $map['ExecHost'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
